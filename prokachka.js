document.getElementById("prokchka")
	.onchange = function(){
		var d = {
			1: "prokchka100-110",
			2: "prokchka90-100",
			3: "prokchka20-110"
		}, f = this.value,
			j;
		for (j in d) document.getElementById(d[j])
			.style.display = 0 == f || f == j ? "block" : "none"
	};