$(document).ready(function(){

    var users = [
        {
            id: 97,
            firstName: "aaaa",
            lastName: "default",
            email: 'aze@mail.com'
        }
    ]

    $('#submitButton').click(function () {
        var data = $("#submitForm").serialize();

        console.log(data);
        $.ajax({
               data: data,
               type: "post",
               url: "include/form.php",
               success:  function(data){                    
                    console.log(data);
                    users.push(JSON.parse(data))
                    afficheTable(users)

               
            }
      });
    })

    function getData() {
        $.ajax({    
            type: "GET",
            url: "include/select.php",             
            dataType: "JSON",                  
            success: function(data){  
                console.log(data);                  
                users = data;
                
                afficheTable(users)

            }
        });
    }

    getData()

    function afficheTable(users){
        const data = users.map(user => {
            return `
                <tr>
                    <td>${user.id}</td>
                    <td>${user.firstName}</td>
                    <td>${user.lastName}</td>
                    <td>${user.email}</td>
                </tr>
            `;
        });

        $("#table-container").html(data);
    }

  
});


