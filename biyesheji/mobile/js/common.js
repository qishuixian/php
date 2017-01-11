$(function(){

    /* 公用tab切换 */
    function tabChange(tabTitBox, tabCntBox, tabOn, event){
        var event = event ? event : 'click';
        $(tabTitBox).children().bind(event,function(){
            var $this = $(this);
            var objIndex = $(tabTitBox).children().index($(this));
            $this.addClass(tabOn).siblings().removeClass(tabOn);
            $(tabCntBox)
                .children()
                .eq(objIndex)
                .removeClass('none')
                .siblings()
                .addClass('none');
        });
    }
    tabChange('.mb-tab', '.mb-tab-con', 'active');

})