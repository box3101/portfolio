$(function(){

	$(".list>li").on("click",function(e){
		e.preventDefault();

		var target = $(this).children("a").attr("href");
		callData(target);
	})


	function callData(target){
		$.ajax({

			url : target,
			beforeSend : function(){
				console.log("데이터 불러오기전까지 이구문이 실행")
				//데이터를 불러오기 전까지 실행할 구문
			},

			success : function(data){
				console.log(data);
				$(".showBox").html(data);
				//데이터가 성공적으로 불러와지면 실행할 구문
			},

			error : function(){
				console.log("데이터 불러오기 실해")
				alert("데이터를 불러오는데 실패했습니다");
			}

		});
	}


	});
