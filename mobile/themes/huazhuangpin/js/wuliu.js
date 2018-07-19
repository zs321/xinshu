jQuery(function($){
	var resultJson = eval('(wuliu)');
	var resultTable = $("#queryResult");
	resultTable.empty();
	if(resultJson.status == 200) { //成功
		var resultData = resultJson.data;
		for (var i = 0; i >= 0; i++) {
			var className = "";
			if(i%2 == 0){
				className = "even";
			}else{
				className="odd";
			}
			if(resultData.length == 1){
				if(resultJson.ischeck == 1){
					className += " checked";
				}else{
					className += " wait";
				}
			}else if(i == resultData.length - 1){
				className += " first-line";
			}else if(i == 0){
				className += " last-line";
				if(resultJson.ischeck == 1){
					className += " checked";
				}else{
					className += " wait";
				}
			}

			var index = resultData[i].ftime.indexOf(" ");
			var result_date = resultData[i].ftime.substring(0,index);
			var result_time = resultData[i].ftime.substring(index+1);

			var s_index = result_time.lastIndexOf(":");
			result_time = result_time.substring(0,s_index);

			resultTable.append("<tr class='" + className + "'><td class='col1'><span class='result-date'>" + result_date + "</span><span class='result-time'>" + result_time + "</span></td><td class='colstatus'></td><td class='col2'><span>" + resultData[i].context + "</span></td></tr>");
		}
		$("body").animate({minHeight: "100px"});
	}else if(resultJson.status == 400){
		resultTable.append("<tr><td>订单暂未发货，请稍后再来查询</td></tr>");				
	}else{
		resultTable.append("<tr><td>"+ resultJson.message +"</td></tr>");				
	}
})
