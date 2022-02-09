let URLString = `listofusers.php`;
console.log(URLString);
let request = new Request(URLString, {
  method: "GET",
  headers: {
    'Content-Type': 'application/json'
  },
  redirect: "follow"
});

fetch(request).then(function (response) {
  if (!response.ok) {
    return Promise.reject("Network error");
  }
  return response.json();
}).then(function (value) {
  if (value.length === 0) {
    return Promise.reject("Not found");
  } else {
    let obj = value;
    let htmlString = "";
    let element = document.querySelector("#user");
    for (let i = 0; i < obj.length; i++) {
      htmlString += "<li onclick='checkUser(this.id)' id = '" + obj[i].username
      + "'>" + obj[i].username + "</li>";
    }
    element.innerHTML = htmlString;
  }
}).catch(function (rejection) {
  console.log(rejection);
});
