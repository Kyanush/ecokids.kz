<template>
    <div class="box">

        <div class="box-header with-border">
            <router-link :to="{ path: '/payments/create'}" class="btn btn-primary ladda-button">
                <span class="ladda-label">
                    <i class="fa fa-plus"></i> Создать тип оплаты
                </span>
            </router-link>
            <input id="filter-search" type="search" class="form-control input-sm pull-right" placeholder="Поиск" v-model="filter.search">
        </div>

       <div class="table-responsive">
           <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Логотип</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd even" v-for="(item, index) in payments.data">
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>
                            <img  class="img" v-if="item.logo" v-bind:src="item.logo ? '/uploads/payments/' + item.logo : ''" width="70"/>
                        </td>
                        <td>
                            <router-link :to="{ path: '/payments/edit/' + item.id}" class="btn btn-xs btn-default">
                                <i class="fa fa-edit"></i> Изменить
                            </router-link>

                            <a class="btn btn-xs btn-default" @click="paymentDelete(item, index)">
                                <i class="fa fa-remove"></i> Удалить
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Логотип</th>
                        <th>Действия</th>
                    </tr>
                </tfoot>
       </table>
       </div>

        <div class="text-center">
            <paginate
                    v-if="payments.last_page > 1"
                    v-model="payments.current_page"
                    :page-count="payments.last_page"
                    :click-handler="SetPage"
                    :prev-text="'<<'"
                    :next-text="'>>'"
                    :container-class="'pagination'"
                    :page-class="'page-item'"></paginate>
        </div>


    </div>
</template>


<script>
    import Paginate from 'vuejs-paginate';

    export default {
        components:{
            Paginate
        },
        data () {
            return {
                payments: [],
                filter:{
                    page:   (this.$route.query.page   ? this.$route.query.page : 1),
                    search: (this.$route.query.search ? this.$route.query.search : '')
                }
            }
        },
        watch: {
            filter: {
                handler: function (val, oldVal) {
                    this.paymentsList();
                },
                deep: true
            }
        },
        created(){
            this.paymentsList();
        },
        methods:{
            SetPage(page){
                this.filter.page = page;
            },
            paymentDelete(item, index){
                this.$swal({
                    title: 'Вы действительно хотите удалить' + ' "' + item.name + '"?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Нет'
                }).then((result) => {
                    if (result.value) {
                        axios.post('/admin/payment-delete/' + item.id).then((res)=>{
                            if(res.data)
                            {
                                this.$helper.swalSuccess('Успешно удален');
                                this.$delete(this.payments.data, index);
                            }
                        });
                    }
                });
            },
            paymentsList(){
                var params = {};
                if(this.filter.page > 1 && !this.filter.search)
                    params['page'] = this.filter.page;

                if(this.filter.search)
                    params['search'] = this.filter.search;

                axios.get('/admin/payments-list', {params:  params}).then((res)=>{
                    this.payments = res.data;
                    this.$router.push({query: params});
                });
            }
        }

    }
</script>
