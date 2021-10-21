<template>
    <div class="container">
        <div class="modal" id="tourDetail" v-if="Object.keys(tourDetailInfo).length !== 0">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Tour {{ tourDetailInfo.id }} </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="user-name">
                            <label for="">ID : </label>
                            {{ tourDetailInfo.id }} 
                        </div>
                        <div class="user-name">
                            <label for="">Name : </label>
                            {{ tourDetailInfo.name }} 
                        </div>
                        <!-- <div class="user-name">
                            <label for="">Email : </label>
                            {{ userDetailInfo.email }} 
                        </div>
                        <div class="user-name">
                            <label for="">Category : </label>
                            {{ userDetailInfo.category_name }} 
                        </div>
                        <div class="user-name">
                            <label for="">Created at : </label>
                            {{ userDetailInfo.created_at }} 
                        </div>
                        <div class="user-name">
                            <label for="">Update_at : </label>
                            {{ userDetailInfo.updated_at }} 
                        </div> -->
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            tourDetailInfo: {
                type: Object,
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>