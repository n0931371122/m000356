Vue.use(window.VueAwesomeSwiper);
var vm=new Vue({
    el: ".wp",
    data: {
        indexWorkData:{
            indexWorkList,
            tempIndexWorkList:indexWorkList,
            categoryList,
            selectedCategoryId:0,
            worksBarWidth:0,
            worksBarTransform:0,
            perView:0,
            swiperContainerWidth:0,
            swiperOptions: {
                slidesPerView: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768:{
                        slidesPerView: 2,
                    },
                    1200: {
                        slidesPerView: 2.7
                    },
                },
                on:{
                    slideChangeTransitionStart:function(swiper){
                        vm.indexWorkData.worksBarTransform+=(swiper.activeIndex - swiper.previousIndex)*vm.indexWorkData.worksBarWidth;
                    },
                }
            },
        },
    },
    computed: {
        workSwiper() {
            return this.$refs.workSwiper.$swiper
        }
    },
    watch:{
        'indexWorkData.selectedCategoryId':function(){
            if(vm.indexWorkData.selectedCategoryId==0){
                this.indexWorkData.tempIndexWorkList=this.indexWorkData.indexWorkList;
            }
            else{
                this.indexWorkData.tempIndexWorkList=this.indexWorkData.indexWorkList.filter(function(item){
                    return item.categoryId==vm.indexWorkData.selectedCategoryId
                });
            }
            this.initSwiper();
        }
    },
    methods:{
        initSwiper(){
            this.workSwiper.slideTo(0);
            this.indexWorkData.worksBarTransform=0;
            let worksSlickTimes=Math.floor(this.indexWorkData.tempIndexWorkList.length-this.indexWorkData.perView)>=0?Math.floor(this.indexWorkData.tempIndexWorkList.length-this.indexWorkData.perView):0;
            if(isFinite(this.indexWorkData.swiperContainerWidth/worksSlickTimes)){
                this.indexWorkData.worksBarWidth=Math.floor(this.indexWorkData.swiperContainerWidth/worksSlickTimes);
            }
            else{
                this.indexWorkData.worksBarWidth=0;
            }
        }
    },
    mounted() {
        this.indexWorkData.perView=$(window).innerWidth()>1199?1.7:1;
        this.indexWorkData.swiperContainerWidth=$(this.workSwiper.$el).width();
        this.initSwiper();
    }
});