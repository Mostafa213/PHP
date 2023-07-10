
// console.log('teat');
function getAllQuizData(id) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../pages/redirectionsForApplicant.php");
  xhr.setRequestHeader("Content-Type", "application/json");
  const data = {
    function: 'getQuizFullData',
    QuizID: id
  }
  const body = JSON.stringify(data);

  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {

      var form = document.getElementById('myForm');
      var hidden = document.createElement("input");
      hidden.setAttribute("type", "hidden");
      hidden.setAttribute("name", "data");
      hidden.setAttribute("value", xhr.responseText);
      form.appendChild(hidden);
      document.getElementById("myForm").submit();
    } else {
      console.log(xhr);
      console.log(`Error: ${xhr.status}`);
      console.log(xhr.responseText);
    }
  };
  xhr.send(body);

}


function updataQuizID(id,  name) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../pages/redirectionsForApplicant.php");
  xhr.setRequestHeader("Content-Type", "application/json");
  var quizIdInput = document.getElementById("QuizIId");
  const data = {
    function: 'addQuiz',
    quizId: quizIdInput.value,
    userId: id,
    name: name
  }
  const body = JSON.stringify(data);

  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log(xhr.responseText);
      // alert(data['quizId']);
      alert(xhr.responseText);
      location.reload();
    } else {
      console.log(xhr);
      console.log(`Error: ${xhr.status}`);
    }
  };
  xhr.send(body);
  
}
















