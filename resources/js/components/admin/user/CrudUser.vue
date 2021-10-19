<template>
    <div class="api-calling container mt-5">
        <button class="btn btn-success" @click="changeCreate()">Creates User</button>
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
        <div class="form-group" v-if="isCreate">
            <label>Name</label>
            <input v-model="user.name" type="text" class="form-control" placeholder="Name...">
        </div>
        <div class="form-group" v-if="isCreate">
            <label>Category_User_ID</label>
            <select v-model="user.category_user_id" class="form-control">
                <option v-for="category_user in listCategoryUser" :key="category_user.id" v-bind:value="category_user.id">
                    {{ category_user.name }}
                </option>
            </select>
        </div>
        <div class="form-group" v-if="isCreate">
            <label>Email</label>
            <input v-model="user.email" type="text" class="form-control" placeholder="Email...">
        </div>
        <div class="form-group" v-if="isCreate">
            <label>Password</label>
            <input v-model="user.password" type="password" class="form-control" placeholder="Password...">
        </div>
        <div class="form-group" v-if="isCreate">
            <label>Confirm Password</label>
            <input v-model="user.confirm_password" type="password" class="form-control" placeholder="Password...">
        </div>
        <button class="btn btn-primary" @click="createUser" v-if="isCreate">Add User</button>

        <hr>
        <h1>List Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Category_User_ID</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <transition-group name="slide-fade" tag="tbody">
                <tr v-for="(user, index) in listUsers.data" :key="user.id">
                    <th scope="row">{{ user.id }}</th>
                    <td v-if="!user.isEdit">
                        {{ user.name }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedUser.name" class="form-control">
                    </td>
                    <td v-if="!user.isEdit">
                        {{ user.email }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="selectedUser.email" class="form-control" readonly>
                    </td>
                    <td v-if="!user.isEdit">
                        {{ user.category_user_id }}
                    </td>
                    <td v-else>
                        <select v-model="selectedUser.category_user_id" class="form-control">
                            <option v-for="category_user in listCategoryUser" :key="category_user.id" v-bind:value="category_user.id">
                                {{ category_user.name }}
                            </option>
                        </select>
                    </td>
                    <td scope="col" v-if="user.isEdit===true">
                        <input type="password" v-model="selectedUser.password" class="form-control" placeholder="Password">
                        <input type="password" v-model="selectedUser.confirm_password" class="form-control" placeholder="Confirm Password">
                    </td>
                    <td v-else>

                    </td>
                    <td v-if="!user.isEdit">
                        <button class="btn btn-primary" @click="selecteUser(user)">Edit</button>
                        <button class="btn btn-danger" @click="deleteUser(user, index)">Delete</button>
                    </td>
                    <td v-else>
                        <button class="btn btn-primary" @click="updateUser(index)">Save</button>
                        <button class="btn btn-danger" @click="user.isEdit = false">Cancel</button>
                    </td>
                </tr>
            </transition-group>
        </table>
        <div>
            {{ listUsers.from }} - {{ listUsers.to }} of {{ listUsers.total }}
        </div>
        <ul class="pagination">
            <li
                class="page-item"
                :class="{ 'disabled': listUsers.prev_page_url === null }"
                @click="listUsers.prev_page_url && getListUsers(listUsers.current_page - 1)"
            >
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item" v-if="listUsers.prev_page_url" @click="getListUsers(listUsers.current_page - 1)">
                <a class="page-link" href="#">{{ listUsers.current_page - 1 }}</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">{{ listUsers.current_page }}</a>
            </li>
            <li class="page-item" v-if="listUsers.next_page_url" @click="getListUsers(listUsers.current_page + 1)">
                <a class="page-link" href="#">{{ listUsers.current_page + 1 }}</a>
            </li>
            <li
                class="page-item"
                :class="{ 'disabled': listUsers.next_page_url === null }"
                @click="listUsers.next_page_url && getListUsers(listUsers.current_page + 1)"
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
                user: {
                    name: '',
                    category_user_id: 1,
                    email: '',
                    password: '',
                    confirm_password: '',
                    isEdit: false
                },
                listUsers: {},
                error: null,
                selectedUser: null,
                isCreate: false,
                listCategoryUser: {},
                category_user: {
                    name: ''
                }
            }
        },
        created() {
            this.getListUsers();
            this.getListCategoryUsers();
        },
        methods: {
            async createUser() {
                try {
                    this.error = null
                    const response = await axios.post('/admin/user', {
                        name: this.user.name,
                        category_user_id: this.user.category_user_id,
                        email: this.user.email,
                        password: this.user.password,
                        confirm_password: this.user.confirm_password,
                    })
                    this.listUsers.data.unshift({
                        ...response.data.user,
                        isEdit: false,
                    })

                    // reset giá trị form về ban đầu
                    this.user = {
                        name: '',
                        email: '',
                        password: '',
                        category_user_id: 1, 
                        confirm_password: '',
                    },
                    this.isCreate = false
                } catch (error) {
                    this.error = error.response.data
                }
            },
            async getListUsers(page = 1) {
                try {
                    const response = await axios.get('/admin/user?page=' + page)
                    this.listUsers = response.data
                    this.listUsers.data.forEach(item => {
                        Vue.set(item, 'isEdit', false)
                    })
                } catch (error) {
                    this.error = error.response.data
                }
            },
           selecteUser (user) {
                user.isEdit = true
				this.selectedUser = { ...user }
			},
            changeCreate() {
                this.isCreate = !this.isCreate
			},
			async updateUser(index) {
                try {
                    const response = await axios.put('/admin/user/' + this.selectedUser.id, {
                        name: this.selectedUser.name,
                        category_user_id: this.selectedUser.category_user_id,
                        email: this.selectedUser.email,
                        password: this.selectedUser.password,
                        confirm_password: this.selectedUser.confirm_password
                    })
                    this.listUsers.data[index].name = response.data.user.name
                    this.listUsers.data[index].category_user_id = response.data.user.category_user_id
                    this.listUsers.data[index].email = response.data.user.email
                    this.listUsers.data[index].password = response.data.user.password
                    this.listUsers.data[index].isEdit = false
                } catch (error) {
                    this.error = error.response.data
                }
			},
            async deleteUser(user, index) {
                try {
                    await axios.delete('/admin/user/' + user.id)
                    this.listUsers.data.splice(index, 1)
                } catch (error) {
                    this.error = error.response.data
                }
            },
            async getListCategoryUsers() {
                try {
                    const response = await axios.get('/admin/category_user')
                    this.listCategoryUser = response.data
                    console.log(this.listCategoryUser)
                } catch (error) {
                    this.error = error.response.data
                }
            },
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