<template>
    <div class="projects">
        <div class="tableFilters">
            <input class="input" type="text" v-model="tableData.search" placeholder="Search Table"
                   @input="getProjects()">

            <div class="control">
                <div class="select">
                    <select v-model="tableData.length" @change="getProjects()">
                        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                    </select>
                </div>
            </div>
        </div>
        <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
            <tbody>
                <tr v-for="project in projects" :key="project.id">
                    <td>{{project.id}}</td>
                    <td>{{project.stage}}</td>
                    <td>{{project.name}}</td>
                </tr>
            </tbody>
        </datatable>
        <pagination :pagination="pagination"
                    @prev="getProjects(pagination.prevPageUrl)"
                    @next="getProjects(pagination.nextPageUrl)">
        </pagination>
    </div>
</template>

<script>
import Datatable from './Datatable.vue';
import Pagination from './Pagination.vue';
export default {
    components: { datatable: Datatable, pagination: Pagination },
    created() {
        this.getProjects();
    },
    data() {
        let sortOrders = {};

        let columns = [
            {width: '33%', label: 'id', name: 'id' },
            {width: '33%', label: 'stage', name: 'stage'},
            {width: '33%', label: 'Status', name: 'status'}
        ];

        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        return {
            projects: [],
            columns: columns,
            sortKey: 'deadline',
            sortOrders: sortOrders,
            perPage: ['10', '20', '30'],
            tableData: {
                draw: 0,
                length: 10,
                search: '',
                column: 0,
                dir: 'desc',
            },
            pagination: {
                lastPage: '',
                currentPage: '',
                total: '',
                lastPageUrl: '',
                nextPageUrl: '',
                prevPageUrl: '',
                from: '',
                to: ''
            },
        }
    },
    methods: {
        getProjects(url = '/admin/leaderboard') {
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                   // console.log(data);
                    if (this.tableData.draw == data.draw) {
                        this.projects = data.data.data;
                        this.configPagination(data.data);
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        configPagination(data) {
            this.pagination.lastPage = data.last_page;
            this.pagination.currentPage = data.current_page;
            this.pagination.total = data.total;
            this.pagination.lastPageUrl = data.last_page_url;
            this.pagination.nextPageUrl = data.next_page_url;
            this.pagination.prevPageUrl = data.prev_page_url;
            this.pagination.from = data.from;
            this.pagination.to = data.to;
        },
        sortBy(key) {
            this.sortKey = key;
            this.sortOrders[key] = this.sortOrders[key] * -1;
            this.tableData.column = this.getIndex(this.columns, 'stage', key);
            this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
            this.getProjects();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
    }
};
</script>
