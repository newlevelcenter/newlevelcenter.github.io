       
        var animal = {name:"jack", age:2,canspeak:"yes"};
		var cat = {name:"Vasja", age:3, whatsay:"mjau"};

		cat.__proto__= animal;
		console.log(cat);
		console.log(cat.canspeak);
		console.log(cat.whatsay);




		function World (){
			this.sky = "blue";
			this.x0=0;
			this.y0=0;
			this.x1=640;
			this.y1=480;
		}

		var newWorld = new World();
		
        //Добавляем поля
		newWorld.j = 'f';

		console.log(newWorld);

		function Company(){
			this.name = "google";
			this.people=10000;
			this.sayhello = function (){alert("hello")};
		}

		Company.prototype = newWorld;
		
		var newcompany = new Company();
		
		console.log(newcompany);
		console.log(newcompany.sky);
