//연습(+, -, *, /)
const lator = {
    plus: function(a , b){
      return a + b ;
    },
    minus: function(a, b){
      return a - b;
    },
    gob: function(a, b){
      return a * b;
    },
    na: function(a, b){
     return a / b;
    }
   }
   
   const plus = lator.plus(3, 4);
   const minus = lator.minus(2, 3);
   const gob = lator.gob(2, 2);
   const na = lator.na(3, 2);
   console.log(plus);
   console.log(minus);
   console.log(gob);
   console.log(na);
   
   //연습(+, -, *, /)