$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

// $(document).ready(function(){
//    $('.product').css('opacity', 0.7)
//    .mouseover(function() {
//    	$(this).css('opacity', 1);
//    })
//    .mouseout(function() {
//    	$(this).css('opacity', 0.7);
//    });
// });

var BaseRecord={

top6: 1,
search: '',

more: function(){
    var ajaxSetting={
      method: 'get',
      url: './',
      data: {
      	top9: this.top6,
      	search: this.search,
      },
      success: function(data){
      	//alert(data.table);
      	$('.tab-grids').html(data.table);
        
      },
    };
    $.ajax(ajaxSetting);
},

removeone: function(id){
    var ajaxSetting={
      method: 'post',
      url: './clearone',
      data: {
        id: id,
      },
      success: function(data){
        //alert(data);
        BaseRecord.cart();
      },
    };
    $.ajax(ajaxSetting);
},

clearall: function(id){
    var ajaxSetting={
      method: 'post',
      url: './clearall',
      // data: {
      //   id: id,
      // },
      success: function(data){
        //alert(data);
        BaseRecord.cart();
      },
    };
    $.ajax(ajaxSetting);
},

cart: function(){
    var ajaxSetting={
      method: 'get',
      url: './cart',
      success: function(data){
        //alert(data);
        $('.cart-header').html(data.table);
            $('.submitremoveone').click(function(){
            BaseRecord.removeone($(this).attr('id'));
            return false;
        });
      },
    };
    $.ajax(ajaxSetting);
},

mailer: function(message, contact){
  //if(message!='' && contact!=''){
    var ajaxSetting={
      method: 'post',
      url: './mailer',
      data: {
        message: message, //$request->message
        contact: contact, //$request->contact
      },
      success: function(data){
        //alert(data.answer);
        //alert(data);

        if (data.answer) {
          var data_json=JSON.parse(data.answer);
            if(data_json['mail'] && data_json["request"]){
              $('.result_to_email').html('Your message has been seccessfully sent...');
              $('.result_to_email').css('color', 'green');
            } else {
              $('.result_to_email').html('There is any mistake...');
              $('.result_to_email').css('color', 'red');
            }
        } else {
          var data_json=JSON.parse(data);
          var error_str='';
          for(var i in data_json){
             error_str+=data_json[i]+'\n';
          }
          alert(error_str);
        }

      },
    };
    $.ajax(ajaxSetting);
  // } else {
  //   alert('Fields must be failed!');
  // }
},

};