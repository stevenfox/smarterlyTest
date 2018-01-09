function checkTextField(field) {
  var textboxx = document.getElementById("text");
  var word = 'palindrome';
  var button = document.getElementById("subButton");
 
  if (textboxx.value.length>254 ||textboxx.value.indexOf(word)!==-1) {
          alert('Your textbox is not correct, please try again');
          button.setAttribute('disabled',true);
        } 

}