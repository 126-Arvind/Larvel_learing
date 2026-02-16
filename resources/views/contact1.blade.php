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
                <h1> @ if  condition is true</h1>
                @elseif($contact == '@onsracode')
                <h1>@ elseif condition is  true</h1>
                @else
                <h1>this else if also true</h1>

                @endif

                @unless($contact == 'onsracode')
                <h1>
                    <small style="color:red"> @ unless </small>
                  if condition not true then execute,  You are not Admin
                 <small style="color:red"> @ endunless</small></h1>
                @endunless

                @isset($contact)
                <h1>
                    @ isset($ id ) if $id value exist then execute else not , end with @ endisset 
                </h1>
                @endisset

                @empty($contac)
                <h1>
                    If @ empty ($contact) then execute else not

                </h1>
                @endempty

                @production 
                <h1>
                   @ production only execute when you are on production esle not 
                </h1>
                @endproduction

                @env('local')

                 @ production 
                <h1>
                   @ production only execute when you are on production esle not 
                </h1>
                @ endproduction

                @ env('local')
                <h1> local environment  </h1>
                @ endenv
                @endenv








            {{-- switch case --}}

            @switch(6)
              @case(1)
              <h1>this is fist case of switch</h1>
              @break
              @case(2)
              <h1> this is second case of switch</h1>
              @break
              @case(3)
              <h1>this is third case of switch</h1>
              @break
              @default
              <h1>Defualt case of switch in which no case match</h1>
              @endswitch





              {{-- For loop case --}}

              @for($i = 0; $i<4; $i++)
              <h1>@ for loop end with @ endfor</h1>
              <h1>{{$i}}</h1>
              @endfor







            </body>
</html>