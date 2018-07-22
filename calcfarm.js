let resultMoney = 0,
	resultFarm = 0,
	total = 0, 
	inputMoney = document.getElementById('input-money-farm'),
	totalValue = document.getElementsByClassName('total-count')[0],
	inputFarm = document.getElementById('input-gold-farm');

const hourfarm = 0.01;

window.addEventListener('DOMContentLoaded', function(){

	inputFarm.addEventListener('change', () => {
		inputMoney.value = '';
		resultMoney = inputFarm.value / hourfarm;
		inputMoney.value = resultMoney;
		totalValue.value = inputMoney.value;
		document.querySelector('.add_item').dataset.price = inputMoney.value;
	});

	inputMoney.addEventListener('change', () =>{
		inputFarm.value = '';
		resultFarm = inputMoney.value * hourfarm;
		inputFarm.value = resultFarm;
		totalValue.value = inputMoney.value;
		document.querySelector('.add_item').dataset.price = inputMoney.value;
	});

});