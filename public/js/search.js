$(document).ready(()=>{
	$('button[type="button"]').click(()=>{
		let username = $('#username').val();
		let data = {username: username};
		fetch('http://127.0.0.1:8000/api/search',{
				method: 'post',
				headers:{
					'Content-type':'application/json'
				},
				body: JSON.stringify(data)
			})
			.then((response)=>response.json())
			.then((output)=>{
				console.log(output);
				showUser(output[0]);
			})
			.catch((err)=>{
				console.log(err);
			});
	});

	function showUser(obj){
		$('.detail-container tbody').empty();
		let container = $('.detail-container tbody');
		for(let [key,value] of Object.entries(obj)){
			let row = $('<tr/>').appendTo($(container));
			$('<td/>',{
				text: key
			}).appendTo($(row));
			$('<td/>',{
				text: value != null ? value: 'NULL'
			}).appendTo($(row));
		}
		$('span.uname').text(obj['cn']);
	}
});