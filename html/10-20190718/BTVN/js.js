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
    var len=data.users.length;
    var doc=document.getElementById;
    for(var i=0;i<len;i++)
    {
        var a=data.users[i].id;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para);

        var a=data.users[i].name;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para);

        var a=data.users[i].email;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para); 
        
        var a=data.users[i].password;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para); 

        var a=data.users[i].created_at;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para); 

        var a=data.users[i].updated_at;
        var para = document.createElement("td");
        var node = document.createTextNode(a);
        para.appendChild(node);
        var element = document.getElementById('tr-'+i);
        element.appendChild(para);
    }