<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <CrudUser @selectUserDetail="userSelected"></CrudUser>
        </div>
        <div class="user-detail-comp">
            <UserDetail :userDetailInfo="userDetailInfo"></UserDetail>
        </div>
    </div>
</template>

<script>
    import CrudUser from './CrudUser.vue';
    import UserDetail from './UserDetail.vue';
    export default {
        components: {
            CrudUser,
            UserDetail,
        },
        data() {
            return {
                userDetailInfo : {},
            }
        },
        methods: {
            userSelected(user) {
                this.userDetailInfo = user;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .user-dashboard {
        margin: 10px auto;
        width: 100%;
    }
</style>