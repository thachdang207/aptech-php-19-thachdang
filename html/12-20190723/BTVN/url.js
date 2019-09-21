// var staticUrl = 'https://namcoi.com/projects/news-website-laravel/public/api/posts?fbclid=IwAR2C3CC6XqgRmQQg0fFMMd_xq_bzBExTKh2k4GgHUwQj1ORi_cE10vvi1DE';
// var cardContainer=document.getElementById('card-container');
// function creatCard()
// {
//     $.getJSON(staticUrl, function(data) {
//         var lengthData=data.length/3;
//         console.log(data);
//         var k=0;
//         for(var i=0;i<lengthData;i++)
//         {
//             var cardRow=document.createElement("div");
//             cardRow.className="row d-flex";
//             cardContainer.appendChild(cardRow)
//             {
//                 for(var j=0;j<3;j++)
//                 {
//                     var cardCol= document.createElement("div");
//                     cardCol.className="col-md-4";
//                     cardRow.appendChild(cardCol);

//                     var creatCard=document.createElement("div");
//                     creatCard.className="card my-3";
//                     var cardData=[data[k].title]
//                     cardCol.appendChild(creatCard)
//                     {
                    
//                         var cardBody=document.createElement("div");
//                         cardBody.className="card-body";
//                         creatCard.appendChild(cardBody)
//                         {
//                             var title= document.createElement("h5");
//                             title.innerHTML=data[k].title;
//                             cardBody.appendChild(title);
//                             var btn=document.createElement("a");
//                             btn.className="btn btn-primary";
//                             btn.innerHTML=data[k].categories[0].name;
//                             cardBody.appendChild(btn);
//                             var btn=document.createElement("a");
//                             btn.className="btn btn-primary";
//                             btn.innerHTML=data[k].categories[1].name;
//                             cardBody.appendChild(btn);
//                         }
//                     };

                
                
//                 }
//             }
            
//         }
//     });
// }
        
// // $(document).ready(function(){
// //     var mokData = [
// //     { category: "Material", id: '1', name: 'Brakedown of machine' },
// //     { category: "Material", id: '2', name: 'Brakedown of machine' },
// //     { category: "Tool", id: '3', name: 'Brakedown of machine' },
// //     { category: "Tool", id: '4', name: 'Brakedown of line' },
// //     { category: "Tool", id: '5', name: 'Brakedown of machine' },
// //     { category: "Tool", id: '6', name: 'Brakedown of line' },
// //     { category: "Tool", id: '7', name: 'Brakedown of machine' },
// //     { category: "Tool", id: '8', name: 'Brakedown of line' }
// //     ];
// //     $.each(mokData, function (i) {
// //         var templateString = '<article class="card"><h2>' + mokData[i].category + '</h2><p>' + mokData[i].name + '</p><p>' + mokData[i].id + '</p><button id="tes">Start</button></article>';
// //         $('#test12').append(templateString);
// //     })
    
// //     $("#test12").on("click", function () {
// //         alert("test");
// //     });
// //     });
$(document).ready(function()
{
    $('#load-posts').click(function()
    {
        $.get('https://namcoi.com/projects/news-website-laravel/public/api/posts?fbclid=IwAR2C3CC6XqgRmQQg0fFMMd_xq_bzBExTKh2k4GgHUwQj1ORi_cE10vvi1DE',function(data,status)
        {
            if(status=='success')
            {
                var dataLength=data.length;
                for(var i=0;i<dataLength;i++)
                {
                    var post=data[i];
                    var categoriesOfPost='';
                    var  categoriesOfPostLength=post.categories.length;
                    if(categoriesOfPostLength>0)
                    {
                        for(var j=0;j<categoriesOfPostLength;j++)
                        {
                            var categoryName=post.categories[j].name;
                            categoriesOfPost+='<span class="badge badge=grimary">'+categoryName+'</span>';
                        }
                    }
                   var postContent='<div class="card" style="width:18rem;">\
                   <img src="'+post.image_url+'" class="card-img-top" alt="...">\
                   <div class="card-body">\
                        <h5 class="card-title">'+ post.title+ '</h5>\
                        <p class="card-text">'+post.description+'</p>\
                        '+categoriesOfPost+'\
                    </div></div>';
                    $('#row-body').append(postContent);
                }
                
            }
        })
    })
})