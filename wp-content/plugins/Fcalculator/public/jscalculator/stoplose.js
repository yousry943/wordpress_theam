 const num1 = 1.20834;
 const num2 = 123456789;
 const decimalCount = num => {
     // Convert to String
     const numStr = String(num);
     // String Contains Decimal
     if (numStr.includes('.')) {
         return numStr.split('.')[1];
     };
     // String Does Not Contain Decimal
     return 0;
 }
 console.log(decimalCount(num1)) // 9
 console.log(decimalCount(num2)) // 0
