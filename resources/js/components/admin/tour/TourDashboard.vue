<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <TourCRUD @selectTourDetail="tourSelected"></TourCRUD>
        </div>
        <div class="user-detail-comp">
            <TourDetail :tourDetailInfo="tourDetailInfo"></TourDetail>
        </div>
    </div>
</template>

<script>
    import TourCRUD from './TourCRUD.vue';
    import TourDetail from './TourDetail.vue';
    export default {
        components: {
            TourCRUD,
            TourDetail,
        },
        data() {
            return {
                tourDetailInfo : {},
            }
        },
        methods: {
            tourSelected(tour) {
                this.tourDetailInfo = tour;
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