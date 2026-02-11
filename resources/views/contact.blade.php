<!DOCTYPE html>
<html>
    <head>
        <title>
            Laravel Learing journey
        </title>
        <head>
            <body>
                <h1>
                    Hii, My dear friends welcome back to onsracode. <br>
                    Follow for more info  {{$contact}}
                </h1>
                <h2>
                    I will come live at {{time()}} pm
                </h2>
                <h2>
                    Here we will calculate square root of 49 wich is equal to : {{sqrt(49)}}
                </h2>
                @if($contact == '@onsracode')
                    <h1>This is if condition</h1>
                
                @endif()
                @if($contact == 'onsracode')
                <h1>Hell if condition is true</h1>
                @elseif($contact == '@onsracode')
                <h1>elseif condition is  true</h1>
                @else
                <h1>this else if also true</h1>

                @endif
            </body>
</html>