let resultMoney = 0,
	resultValue = 0,
	total = 0, 
	inputMoney = document.getElementById('input-money'),
	totalValue = document.getElementsByClassName('total-count')[0],
	inputValue = document.getElementById('input-gold'),
	auctionCheck = document.getElementById('auction-option');


const  	onegold = 6;
		percent = 5;

window.addEventListener('DOMContentLoaded', function(){

	inputValue.addEventListener('change', () => {
		inputMoney.value = '';
		resultMoney = inputValue.value * onegold;
		inputMoney.value = Math.round(resultMoney);
		totalValue.value =  inputMoney.value;
		document.querySelector('.add_item').dataset.price = inputMoney.value;
	});

	inputMoney.addEventListener('change', () => {
		inputValue.value = '';
		resultValue = inputMoney.value / onegold;
		inputValue.value = Math.round(resultValue);
		totalValue.value =  inputMoney.value;
		document.querySelector('.add_item').dataset.price = inputMoney.value;
	});

	auctionCheck.addEventListener('change', () => {
		if (auctionCheck.checked) {
			let totalpercent
			total = resultMoney;
			totalpercent = total / 100 * percent;
			return totalpercent + resultMoney;
			totalValue.value = resultMoney;
		}else{
			totalValue.value = inputMoney.value;
		}
	});
});