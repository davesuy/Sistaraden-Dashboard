var sharpspringPubApi = 'http://api.sharpspring.com/pubapi/v1/';

var accountID = '3ACFE8DBD52C5D9F69A7E354DECE0305';
var secretKey = '8FE52D412500E4F6311BCBD005FDE0FD';

var sharpspringConnect = sharpspringPubApi + "?accountID=" + accountID + "&" + "secretKey=" + secretKey;


Vue.mixin({


  data() {


    return {

     	sharpspringConnect: sharpspringConnect


    }


  }

})