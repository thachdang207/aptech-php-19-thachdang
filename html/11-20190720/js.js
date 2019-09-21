var data = {
    "users": [{
        "id": 10,
        "name": "Ethyl Medhurst",
        "email": "noah.hand@example.org",
        "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        "created_at": "2019-03-26 04:55:04",
        "updated_at": "2019-03-26 04:55:04"
      },
      {
        "id": 9,
        "name": "Eula Lebsack PhD",
        "email": "schroeder.sylvan@example.org",
        "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      },
      {
        "id": 8,
        "name": "Mrs. Kathlyn Parisian DDS",
        "email": "ggrimes@example.net",
        "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      }
    ]
  };
//     var len=data.users.length;
//     var doc=document.getElementById;
//     for(var i=0;i<len;i++)
//     {
//         var a=data.users[i].id;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para);

//         var a=data.users[i].name;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para);

//         var a=data.users[i].email;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para); 
        
//         var a=data.users[i].password;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para); 

//         var a=data.users[i].created_at;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para); 

//         var a=data.users[i].updated_at;
//         var para = document.createElement("td");
//         var node = document.createTextNode(a);
//         para.appendChild(node);
//         var element = document.getElementById('tr-'+i);
//         element.appendChild(para);
//     }
// function remove()
// {
//     var parent=document.getElementById("table");
//     var child=document.getElementById("tr-0");
//     parent.removeChild(child);
// }
    // var len=data.users.length;
    // var tableBody=document.getElementById('table-body');
    // for(var i=0;i<len;i++)
    // {
    //   var createRow=document.createElement('tr');
    //   tableBody.appendChild(createRow);
    //   a=data.users[i].lenght;
    //   for(var j=0;j<a;j++)
    //   {
        
    //       var b=data.users[i].id;
    //       var createTd=document.createElement('td');
    //       createTd.innerHTML=b;
    //       createRow.appendChild(createTd);
    //       console.log(b);
    //     if(j==1)
    //     {
    //       var b=data.users[i].name;
    //       var createTd=document.createElement('td');
    //       var node =document.createTextNode(b);
    //     }
    //     else if(j==2)
    //     {
    //       var b=data.users[i].email;
    //       var createTd=document.createElement('td');
    //       var node =document.createTextNode(b);
    //     }
    //     else if(j==3)
    //     {
    //       var b=data.users[i].password;
    //       var createTd=document.createElement('td');
    //       var node =document.createTextNode(b);
    //     }
    //     else if(j==4)
    //     {
    //       var b=data.users[i].created_at;
    //       var createTd=document.createElement('td');
    //       var node =document.createTextNode(b);
    //     }
    //     else
    //     {
    //       var b=data.users[i].updated_at;
    //       var createTd=document.createElement('td');
    //       var node =document.createTextNode(b);
    //     }
        
    //   }
    // }
    var tableBody=document.getElementById('table-body');
    // var tableRow =document.createElement('tr');
    // console.log(tableRow);
    // tableBody.appendChild(tableRow);
    // var tableData=document.createElement('td');
    // tableData.innerHTML=data.users[0].id;
    // tableRow.appendChild(tableData);
function inBang()
{
  for(var i=0;i<3;i++)
    {
      var tableRow =document.createElement("tr");
      tableBody.appendChild(tableRow);

      var user=data.users[i];
      var info=[user.id,user.name,user.email];

      for(var j=0;j<info.length;j++)
      {

        var tableData=document.createElement("td");
        tableData.innerHTML=info[j];
        tableRow.appendChild(tableData);
      }
    }
}
// document.getElementById("cl").addEventListener("click",inBang);
$(document).ready(function()
      {
        $("button").click(function()
          {
            for(var i=0;i<3;i++)
            {
              $("#table-body").append("<tr></tr>")
              {
                console.log(tr);
                var user=data.users[i];
                var info=[user.id,user.name,user.email];
                for(var j=0;j<info.length;j++)
                {
                  var tx=info[j];
                  $("tr").append("<td></td>").t;
                  

                $(".abc").append("<td></td>")
                }
              }
            }
          });
      }
    );
