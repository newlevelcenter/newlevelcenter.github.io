      function Client(){
            this.count = 10;
            this.time = 1;
            this.avg = function(){return this.count/this.time};
        }

        var Ivan = new Client();
        console.log(Ivan);
        console.log(Ivan.count);
        console.log(Ivan.time);
        console.log(Ivan.avg());