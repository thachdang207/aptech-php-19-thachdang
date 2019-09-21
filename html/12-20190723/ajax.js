var table;
var urlUsers="https://namcoi.com/projects/users-crud-laravel/public/api/users?fbclid=IwAR2o_hBLCmAF4SpRi9wXfE7DLUAqNZkWD3y1Td4k-YJ-WuYVuCc2kSDVW28";
function initTableData()
{
    $.get(urlUsers,function(responseData)
    {
        var modifiedUsers = responseData.map(eachUsers =>{
            return {
                id:eachUsers.id,
                name:eachUsers.name,
                email:eachUsers.email,
                password:eachUsers.password,
                created_at:eachUsers.created_at,
                updated_at:eachUsers.updated_at

            };
        });
        table= $('#users').DataTable({
            "processing":true,
            data:modifiedUsers,
            columns:[
                {data:'id'},
                {data:'name'},
                {data:'email'},
                {data:'password'},
                {data:'created_at'},
                {data:'updated_at'}
            ]
        });
    }).fail(function()
    {
        alert("cannot get data form URL");
    });
}
$(document).ready(function()
{
    initTableData();
    $("#list-header").on({
		mouseenter: function() {
			$(this).css("background-color", "lightgray");
		},
		mouseleave: function(){
        	$(this).css("background-color", "lightblue");
    	}, 
    });
    $("#btnReloadData").on("click", function(){
		//alert("reload data...")
		table.ajax.reload();
	});
})