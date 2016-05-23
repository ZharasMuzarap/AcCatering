$(document).ready(function(){
					$('#search_text').keyup(function(){
						var txt = $(this).val();
						if(txt != ''){
							// document.getElementById("result").innerHTML = "HELLO MOTHERFUCKER";
							$.ajax({
								url:"search.php",
								method:"post",
								data:{search:txt},
								dataType:"text",
								success:function(data){
									$('#result').html(data);
								}
							});
						}else{
							$('#result').html('');
							$.ajax({
								url:"search.php",
								method:"post",
								data:{search:txt},
								dataType:"text",
								success:function(data){
									$('#result').html(data);
								}
							});
						}
					});
				});
