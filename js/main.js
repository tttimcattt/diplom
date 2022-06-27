function openModal() 
{
    let result = document.getElementById('date');
    let promise = fetch('date.php',
    {
        method: 'POST',
        body: new FormData(form),
    });
    promise.then(
        response => 
        {
            return response.text();
        }
    ).then(
        text => 
        {
            result.innerHTML = text;
        }
    )
};
function onChangeDate()
{
    let resultP = document.getElementById('place');
    let selind = document.getElementById('date1').options.selectedIndex;
    let id_date = document.getElementById('date1').options[selind].value;
    date.addEventListener('click', function (event) 
    {
        let promise = fetch('place.php/?id_date=' + id_date);
        promise.then(
            response => 
            {
                return response.text();
            }
        ).then(
            text => 
            {
                resultP.innerHTML = text;
            }
        )
        event.preventDefault();
    });
};