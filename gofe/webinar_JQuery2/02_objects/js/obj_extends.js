        var man={name:"Max",age:"31"};
        var simple_client = {count:0, time:0, status:"simple",risk:0.5};
       
      //  man.__proto__=simple_client;
        simple_client.__proto__ = man;
      //  console.log(man);        
        //console.log(man.time);
        console.log(simple_client);        
        


        var simple_clients = [{count:0, time:0, status:"simple"},{count:0, time:0, status:"simple"},{count:0, time:0, status:"simple"}];
        
        console.log(simple_clients);
        simple_clients[0].__proto__ = man;
        console.log(simple_clients);
        
      