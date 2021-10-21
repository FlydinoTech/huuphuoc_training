<template>
    <div class="api-calling container mt-5">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Create Tour
        </button>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Create Tour</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <transition name="fade">
                            <div class="alert alert-danger alert-dismissible" role="alert" v-if="error">
                                <b>{{ error.message }}</b>
                                <ul>
                                    <li v-for="(errorName, index) in error.errors" :key="index">
                                        {{ errorName[0] }}
                                    </li>
                                </ul>
                                <button type="button" class="close" @click="error = null">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </transition>
                        <div class="form-group">
                            <label>Name</label>
                            <input v-model="tour.name" type="text" class="form-control" placeholder="Name...">
                        </div>
                        <div class="form-group">
                            <label>Category_ID</label>
                            <select v-model="tour.category_id" class="form-control">
                                <option v-for="category in listCategories" :key="category.id" v-bind:value="category.id">
                                    {{ category.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input v-model="tour.description" type="text" class="form-control" placeholder="Description...">
                        </div>
                        <div class="form-group">
                            <label>Day</label>
                            <input v-model="tour.day" type="text" class="form-control" placeholder="Day...">
                        </div>
                        <div class="form-group">
                            <label>Night</label>
                            <input v-model="tour.night" type="text" class="form-control" placeholder="Night...">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input v-model="tour.price" type="text" class="form-control" placeholder="Price...">
                        </div>
                        <div class="form-group">
                            <label>Discount</label>
                            <input v-model="tour.discount" type="text" class="form-control" placeholder="Discount...">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-primary" @click="createTour" >Add Tour</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h1>List Tour</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Day</th>
                    <th scope="col">Night</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <transition-group name="slide-fade" tag="tbody">
                <tr v-for="(tour, index) in listTours.data" :key="tour.id">
                    <th scope="row">{{ tour.id }}</th>
                    <td v-if="!tour.isEdit">
                        {{ tour.name }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.name" class="form-control">
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.category_id }}
                    </td>
                    <td v-else>
                        <select v-model="selectedTour.category_id" class="form-control">
                            <option v-for="category in listCategories" :key="category.id" v-bind:value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.description }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.description" class="form-control" readonly>
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.day }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.day" class="form-control" readonly>
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.night }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.night" class="form-control" readonly>
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.price }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.price" class="form-control" readonly>
                    </td>
                    <td v-if="!tour.isEdit">
                        {{ tour.discount }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedTour.discount" class="form-control" readonly>
                    </td>
                    <td v-if="!tour.isEdit">
                        <button class="btn btn-success" @click="selectTourDetail(tour)" data-toggle="modal" data-target="#tourDetail">Detail</button>
                        <button class="btn btn-primary" @click="selectTour(tour)">Edit</button>
                        <button class="btn btn-danger" @click="deleteTour(tour, index)">Delete</button>
                    </td>
                    <td v-else>
                        <button class="btn btn-primary" @click="updateTour(index)">Save</button>
                        <button class="btn btn-danger" @click="tour.isEdit = false">Cancel</button>
                    </td>
                </tr>
            </transition-group>
        </table>
        <div>
            {{ listTours.from }} - {{ listTours.to }} of {{ listTours.total }}
        </div>
        <ul class="pagination">
            <li
                class="page-item"
                :class="{ 'disabled': listTours.prev_page_url === null }"
                @click="listTours.prev_page_url && getListTours(listTours.current_page - 1)"
            >
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item" v-if="listTours.prev_page_url" @click="getListTours(listTours.current_page - 1)">
                <a class="page-link" href="#">{{ listTours.current_page - 1 }}</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">{{ listTours.current_page }}</a>
            </li>
            <li class="page-item" v-if="listTours.next_page_url" @click="getListTours(listTours.current_page + 1)">
                <a class="page-link" href="#">{{ listTours.current_page + 1 }}</a>
            </li>
            <li
                class="page-item"
                :class="{ 'disabled': listTours.next_page_url === null }"
                @click="listTours.next_page_url && getListTours(listTours.current_page + 1)"
            >
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
</template>

<script>  
    export default {
        data() {
            return {
                tour: {
                    name: '',
                    category_id: 1,
                    description: '',
                    day: '',
                    night: '',
                    price: '',
                    discount: '',
                    isEdit: false
                },
                isDetail: false,
                listTours: {},
                error: null,
                selectedTour: null,
                listCategories: {},
                category: {
                    name: ''
                },
            }
        },
        created() {
            this.getListTours();
            this.getListCategories();
        },
        methods: {
            async createTour() {
                try {
                    this.error = null
                    const response = await axios.post('/admin/tour', {
                        name: this.tour.name,
                        category_id: this.tour.category_id,
                        description: this.tour.description,
                        day: this.tour.day,
                        night: this.tour.night,
                        price: this.tour.price,
                        discount: this.tour.discount,
                    })
                    this.listTours.data.unshift({
                        ...response.data.tour,
                        isEdit: false,
                    })
                    console.log(this.listTours)
                    // reset giá trị form về ban đầu
                    this.tour = {
                        name: '',
                        category_id: 1,
                        description: '',
                        day: '',
                        night: '',
                        price: '',
                        discount: '',
                    }
                } catch (error) {
                    this.error = error.response.data
                }
            },
            async getListTours(page = 1) {
                try {
                    const response = await axios.get('/admin/tour?page=' + page)
                    this.listTours = response.data
                    console.log(this.listTours)
                    this.listTours.data.forEach(item => {
                        Vue.set(item, 'isEdit', false)
                    })
                } catch (error) {
                    this.error = error.response.data
                }
            },
           selectTour (tour) {
                tour.isEdit = true
                this.selectedTour = { ...tour }
            },
            async updateTour(index) {
                try {
                    const response = await axios.put('/admin/tour/' + this.selectedTour.id, {
                        name: this.selectedTour.name,
                        category_id: this.selectedTour.category_id,
                        description: this.selectedTour.description,
                        day: this.selectedTour.day,
                        night: this.selectedTour.night,
                        price: this.selectedTour.price,
                        discount: this.selectedTour.discount,
                    })
                    this.listTours.data[index].name = response.data.tour.name
                    this.listTours.data[index].category_id = response.data.tour.category_id
                    this.listTours.data[index].description = response.data.tour.description
                    this.listTours.data[index].day = response.data.tour.day
                    this.listTours.data[index].night = response.data.tour.night
                    this.listTours.data[index].price = response.data.tour.price
                    this.listTours.data[index].discount = response.data.tour.discount
                    this.listTours.data[index].isEdit = false
                } catch (error) {
                    this.error = error.response.data
                }
            },
            async deleteTour(tour, index) {
                try {
                    await axios.delete('/admin/tour/' + tour.id)
                    this.listTours.data.splice(index, 1)
                } catch (error) {
                    this.error = error.response.data
                }
            },
            async getListCategories() {
                try {
                    const response = await axios.get('/admin/category')
                    this.listCategories = response.data
                } catch (error) {
                    this.error = error.response.data
                }
            },
            selectTourDetail(tour) {
                this.$emit('selectTourDetail', tour)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(10px);
        opacity: 0;
    }
</style>