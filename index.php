<?php
include_once(__DIR__."/template/head.inc.php");
?>
    <section class="h-dvh w-full flex justify-center items-center hero-bg border-b-gray-600 border-b-1">
        <div class="flex flex-row justify-between gap-5 w-11/12 m-auto" id="home">
            <div class="border border-border-custom max-w-[800px] w-full bg-black rounded-lg flex flex-col justify-start p-7 min-h-[618px] font-jetbrains terminal-container">
                <span class="mx-auto text-white mb-5">Terminal - michielnijenhuis</span> 
                <span class="mb-5"><span class="terminal-arrow">➜</span> <span class="terminal-path">my/portfolio/website</span>:~$ <span class="target_text"></span><span class="cursor"></span></span><br>
                <div class="ml-5" id="output-text">
                </div>
            </div> 
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-4xl mb-5">Hello,</h2> 
                    <p class="max-w-[800px] w-full font-medium">My name is <span class="text-redcustom font-bold">Michiel Nijenhuis</span>. I am a software developer. I love building things and 
                    learn new things. This I like programming a lot, I code a lot at home and make projects 
                    I’m intrested in, that can be different sometimes.<br><br>

                    So that is why I show my projects on this site so you can see them!</p>
                </div>
                <div class="flex flex-col justify-center items-center" id="scroll-indicator">
                    <a href="index.php#about_me"><span class="text-sm mb-2 font-bold" data-i18n="scrollDown">See more</span></a>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"> -->
                        <!--   <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" /> -->
                        <!-- </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                </div>
            </div>
        </div>
    </section>
    <div class="w-full bg-bg-grey p-5 sm:p-15">
        <h2 class="text-4xl font-bold scroll-mt-33" id="about_me">ABOUT ME</h2>
        <div class="m-auto my-13 font-jetbrains bg-background border border-border-custom rounded-lg p-4 sm:p-8 w-11/12 code-block">
            <p class="mb-2"><span class="keyword">const</span> <span>Me</span> <span class="assign">=</span> {</p>
            <p class="ml-4 mb-2">name: <span class="string">"Michiel Nijenhuis"</span>,</p>
            <p class="ml-4 mb-2">email: <span class="string">"contact@michielnijenhuis.com"</span>,</p>
            <p class="ml-4 mb-2">skills: [<span class="string">"HTML"</span>, <span class="string">"CSS"</span>, <span class="string">"PHP"</span>, <span class="string">"C#"</span>, <span class="string">"JAVASCRIPT"</span>, <span class="string">"SQL"</span>],</p>
            <p class="ml-4 mb-2">codeEditor: <span class="string">"Neovim"</span>, <span class="comment">// Because it is the best</span></p>
            <p>};</p>
        </div>
        <p class="max-w-[100%] md:max-w-9/12">I like making projects that I’m intrested in. So sometimes that means I make a game and 
        the other time I want to make a website with Laravel. I work from the Netherlands that is 
        where i live. I am good in learning if I find it interesting or I need to. I really like 
        problem solving that is also the reason I like programming so much, everytime I make an error 
        I like to figure it out and look for it until I find and fix it.</p>
    </div>

    <div class="w-full p-5 sm:p-15 contact-section" id="contact">
        <h2 class="text-4xl font-bold">CONTACT</h2> 
        <form action="https://api.web3forms.com/submit" method="POST" id="message_form" class="landscape-contact">
            <input type="hidden" name="access_key" value="de08dff7-641a-4623-9b73-a9cf3ab34b31">
            <div class="flex flex-row my-15 justify-between gap-5">
                <div class="flex flex-col max-w-1/2 w-full">
                    <div class="flex flex-col">
                        <span class="ml-2 font-bold">Full Name</span> 
                        <input id="name" class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300" 
                        type="text" name="name" value="" placeholder="Firstname Lastname" autocomplete="off" required>
                    </div> 
                    <div class="flex flex-col mt-5">
                        <span class="ml-2 font-bold">Email</span> 
                        <input id="email" class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300"
                        type="email" name="email" value="" placeholder="your@email.com" required>
                    </div> 
                </div> 
                <div class="flex flex-col w-full max-w-1/2 ">
                    <span class="ml-2 font-bold">Message</span> 
                    <textarea id="message" class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300 h-full"
                        placeholder="Write your message here" name="message" required></textarea>
                </div> 
            </div>

            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

            <div class="flex flex-col w-full justify-center items-center font-jetbrains">
                <p>Type '<span class="text-redcustom font-bold">send message</span>' and press <span class="text-redcustom font-bold">Enter</span> to send the message</p>
                <div class="w-full flex flex-row justify-center mt-5">
                    <span><span class="terminal-arrow">➜</span> <span class="terminal-path">send/the/message</span>:~$ run
                        <input class="outline-none" id="message_input" autocomplete="off" type="text" name="" value="" placeholder="send message">
                    </span>
                    <p id="try_again" class="hidden text-redcustom">Try again</p>
                    <p id="approved" class="hidden font-bold text-green-500">Yes! Thank you! The message has been send</p>
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-center">
                <p class="mt-30">For the people that dont understand how to type text and press enter:</p>
                <button type="button" class="bg-white hover:bg-gray-100 hover:cursor-pointer text-gray-800 font-semibold py-2 px-4 mt-5 border border-gray-400 rounded shadow">SEND MESSAGE</button>
            </div>

        </form>

        <!-- This is for the phone display -->
        <form action="https://api.web3forms.com/submit" method="POST" id="message_form" class="phone-contact">
            <input type="hidden" name="access_key" value="de08dff7-641a-4623-9b73-a9cf3ab34b31">
            <div class="flex flex-col w-full">
                <div class="flex flex-col my-15 justify-between gap-5 w-full">
                    <div class="flex flex-col">
                        <span class="ml-2 font-bold">Full Name</span> 
                        <input class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300" type="text" name="name" value="" placeholder="Firstname Lastname" autocomplete="off" required>
                    </div> 
                    <div class="flex flex-col">
                        <span class="ml-2 font-bold">Email</span> 
                        <input class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300" type="email" name="email" value="" placeholder="your@email.com" required>
                    </div> 
                    <div class="flex flex-col w-full">
                        <span class="ml-2 font-bold">Message</span> 
                        <textarea class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300 h-full" placeholder="Write your message here" name="message" required></textarea>
                    </div> 
                </div>
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">SEND</button>
            </div>
        </form>
    </div>
<?php
include_once(__DIR__."/template/foot.inc.php");
