function btnconetone(){
	var conetone = document.getElementById('conetone');
	var x = conetone.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '1', score: x, total: 'totalone'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	conetone.value = "";
}
function btnconettwo(){
	var conettwo = document.getElementById('conettwo');
	var x = conettwo.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '1', score: x, total: 'totaltwo'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	conettwo.value = "";
}
function btnctwotone(){
	var ctwotone = document.getElementById('ctwotone');
	var x = ctwotone.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '2', score: x, total: 'totalone'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	ctwotone.value = "";
}
function btnctwottwo(){
	var ctwottwo = document.getElementById('ctwottwo');
	var x = ctwottwo.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '2', score: x, total: 'totaltwo'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	ctwottwo.value = "";
}
function btncthreetone(){
	var cthreetone = document.getElementById('cthreetone');
	var x = cthreetone.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '3', score: x, total: 'totalone'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	cthreetone.value = "";
}
function btncthreettwo(){
	var cthreettwo = document.getElementById('cthreettwo');
	var x = cthreettwo.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '3', score: x, total: 'totaltwo'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	cthreettwo.value = "";
}
function btncfourtone(){
	var cfourtone = document.getElementById('cfourtone');
	var x = cfourtone.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '4', score: x, total: 'totalone'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	cfourtone.value = "";
}
function btncfourttwo(){
	var cfourttwo = document.getElementById('cfourttwo');
	var x = cfourttwo.value;
	$.ajax({
            //the url to send the data to
            url: "update.php",
            //the data to send to
            // data: {id : $id, lang: $lang},
            data: {courtno : '4', score: x, total: 'totaltwo'},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
	cfourttwo.value = "";
}