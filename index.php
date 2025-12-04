<?php
include_once(__DIR__."/template/head.inc.php");
?>
<section class="h-[94dvh] w-full flex justify-center items-center hero-bg border-b-border-custom border-b-1">
    <div class="flex flex-row justify-between gap-5 w-11/12 m-auto phone-height" id="home">
        <div
            class="border border-border-custom max-w-[800px] w-full bg-black rounded-lg flex flex-col justify-start p-7 min-h-[618px] font-jetbrains font-medium terminal-container">
            <span class="mx-auto text-white mb-5">Terminal - michielnijenhuis</span>
            <span class="mb-5"><span class="terminal-arrow">➜</span>
                <span class="terminal-path">my/portfolio/website <span class="variable">git:(<span
                            class="branch">master</span>)</span></span>
                <span class="string"> ✗ </span>
                <span class="target_text"></span><span class="cursor"></span>
            </span><br>
            <div class="ml-5" id="output-text">
            </div>
        </div>
        <div class="flex flex-col justify-between">
            <div>
                <h2 class="font-bold text-4xl mb-5">Hello,</h2>
                <p class="max-w-[800px] w-full font-medium">My name is <span class="text-redcustom font-bold">
                    Michiel Nijenhuis</span>. I am a software developer. I love building and
                    learning new things. I like programming a lot, I code a lot at home and make projects
                    I’m intrested in.<br><br>

                    So that is why I show my projects on this site so you can see them!</p>
            </div>
            <div class="" id="scroll-indicator">
                <div class="w-fit m-auto flex flex-col justify-center items-center hover:cursor-pointer">
                    <span class="text-sm mb-2 font-bold" data-i18n="scrollDown">See more!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="w-full bg-bg-grey p-5 sm:p-15">
    <h2 class="text-4xl font-bold scroll-mt-33" id="about_me">ABOUT ME</h2>
    <div
        class="m-auto my-13 text-[#908caa] font-jetbrains bg-background border border-border-custom rounded-lg p-4 sm:p-8 w-11/12 code-block">
        <p class="mb-2">
            <span class="keyword">const</span> <span class="variable">Me</span> <span class="rest">=</span> {
        </p>
        <p class="ml-4 mb-2 variable">
            name<span class="rest">:</span> <span class="string">"Michiel Nijenhuis"</span><span class="rest">,</span>
        </p>
        <p class="ml-4 mb-2 variable">
            email<span class="rest">:</span> <span class="string"><a href="mailto:contact@michielnijenhuis.com">"contact@michielnijenhuis.com"</a></span><span
                class="rest">,</span>
        </p>
        <p class="ml-4 mb-2 variable">
            skills<span class="rest">:</span> <span class="rest">[</span>
            <span class="string">"HTML"</span><span class="rest">,</span>
            <span class="string">"CSS"</span><span class="rest">,</span>
            <span class="string">"JAVASCRIPT"</span><span class="rest">,</span>
            <span class="string">"PHP"</span><span class="rest">,</span>
            <span class="string">"SQL"</span><span class="rest">,</span>
            <span class="string">"C#"</span><span class="rest">,</span>
            <span class="string">"RUST"</span>
            <span class="rest">]</span><span class="rest">,</span>
        </p>
        <p class="ml-4 mb-2 variable">
            codeEditor<span class="rest">:</span> <span class="string">"Neovim"</span><span class="rest">,</span> <span
                class="comment">// Because it is the best</span>
        </p>
        <p class="rest">};</p>
    </div>
    <div class="max-w-[100%] md:max-w-9/12">
        <p><strong>Hello, I’m a developer based in the Netherlands.</strong></p>

        <p>I have a strong passion for programming and spend a lot of time on it, whether during school, work, or in my
        free time. I enjoy solving problems I come across. I like diving into them and researching until I find the
        solution.</p><br>

        <p>I’m also a big fan of <strong>terminals</strong>, they just look cool and are awsome :)</p><br>

        <p>I’m currently a second-year software developer student, and I really enjoy it. I’ve also worked at <a class="font-bold hover:text-redcustom transition-colors underline" target="_blank" href="https://creativework.nl">Creative
        Work</a>, where I contributed to frontend development and worked with <strong class="hover:text-blue-400 transition-colors">WordPress</strong>.</p><br>

        <p>My personal projects are more diverse. I enjoy web development, but I also like building applications outside
        the browser, for example with <strong>C#</strong> or <strong>Rust</strong>. I’m always trying to learn new things, keep it challenging and fun.</p>
    </div>
    <div class="h-auto mt-5 flex gap-5">
        <a href="https://github.com/punthenk" target="_blank" class="h-8 hover:cursor-pointer"><img
                class="h-full w-auto opacity-50 hover:opacity-100 transition-all duration-200"
                src="img/github-icon-2.svg" alt="github logo"></a>
        <a href="mailto:contact@michielnijenhuis.com" target="_blank" class="h-8 hover:cursor-pointer"><img
                class="h-full w-auto opacity-50 hover:opacity-100 transition-all duration-200" src="img/email-sms-1.svg"
                alt="mail icon"></a>
    </div>
</div>

<div class="w-full p-5 sm:p-15 contact-section" id="contact">
    <h2 class="text-4xl font-bold">CONTACT</h2>
    <form action="https://api.web3forms.com/submit" method="POST" id="message_form" class="landscape-contact">
        <input type="hidden" name="access_key" value="de08dff7-641a-4623-9b73-a9cf3ab34b31">

        <div class="flex flex-row my-15 justify-between gap-5">
            <div class="border border-border-custom w-11/12 m-auto bg-black rounded-lg flex flex-col justify-start p-7 pb-14 font-jetbrains font-medium">
                <span class="mx-auto text-white mb-5">Terminal - contact</span>
                <div>
                    <span><span class="terminal-arrow">➜</span> <span class="terminal-path">send/the/message</span> <span
                        class="variable">git:(<span class="branch">message</span>)</span>
                        <span class="string"> ✗ </span>
                        <span>contact</span><span class="cursor"></span>
                </div>
                <div class="px-10 py-7 flex flex-col justify-center ">
                    <div class="input-line">
                        <div class="py-3"><span class="comment">1 </span><span>name: </span>
                            <div class="input-wrapper inline-block w-8/12">
                                <input 
                                    id="name" 
                                    type="text" 
                                    name="name" 
                                    value="" 
                                    placeholder="# Firstname Lastname" 
                                    autocomplete="off" 
                                    required
                                    class="w-full placeholder:comment"/>
                                <div class="block-cursor" id="name-cursor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="input-line">
                        <div class="py-3"><span class="comment">2 </span><span>email: </span>
                            <div class="input-wrapper inline-block w-8/12">
                                <input 
                                    id="email" 
                                    type="email" 
                                    name="email" 
                                    value="" 
                                    placeholder="# your@email.com" 
                                    autocomplete="off"
                                    required
                                    class="w-full placeholder:comment"/>
                                <div class="block-cursor" id="email-cursor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="input-line">
                        <div class="py-3"><span class="comment">3 </span><span>message: </span>
                            <div class="input-wrapper inline-block w-8/12 align-top">
                                <textarea 
                                    id="message"
                                    rows="1"
                                    placeholder="# Write your message here" 
                                    name="message" 
                                    required
                                    oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px'"
                                    class="w-full resize-none overflow-hidden placeholder:comment"></textarea>
                                <div class="block-cursor" id="message-cursor"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=""><span class="comment">4 </span>
                    <span>to send the message you type '<span class="text-redcustom font-bold">send-message</span>'
                        and press <span class="text-redcustom font-bold">Enter</span></span></div>

                <div class="w-full flex flex-row justify-items-start mt-5 font-bold">
                    <span>
                        <span class="terminal-arrow">➜</span> 
                        <span class="terminal-path">send/the/message</span> 
                        <span class="variable">git:(<span class="branch">message</span>)</span>
                        <span class="string"> ✗ </span>
                        <span class="input-wrapper inline-block">
                            <input class="outline-none w-[120px]" id="message_input" autocomplete="off" type="text" name="" value="" maxlength="12" placeholder="send-message">
                            <span class="block-cursor" id="submit-cursor"></span>
                        </span>
                    </span>
                    <p id="try_again" class="hidden text-redcustom ml-3">Try again</p>
                    <p id="approved" class="hidden font-medium text-green-500 ml-3">Yes! Thank you! The message has been send</p>
                </div>
            </div>
        </div>

        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

        <div class="w-full flex flex-col items-center justify-center">
            <p class="mt-7">For the people that dont understand how to type text and press enter:</p>
            <button id="message_button" type="button"
                class="bg-white hover:bg-gray-100 hover:cursor-pointer text-gray-800 font-semibold py-2 px-4 mt-5 border border-gray-400 rounded shadow">SEND
                MESSAGE</button>
        </div>

    </form>

    <!-- This is for the phone display -->
    <form action="https://api.web3forms.com/submit" method="POST" id="message_form" class="phone-contact">
        <input type="hidden" name="access_key" value="de08dff7-641a-4623-9b73-a9cf3ab34b31">
        <div class="flex flex-col w-full">
            <div class="flex flex-col my-15 justify-between gap-5 w-full">
                <div class="flex flex-col">
                    <span class="ml-2 font-bold">Full Name</span>
                    <input class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300"
                        type="text" name="name" value="" placeholder="Firstname Lastname" autocomplete="off" required>
                </div>
                <div class="flex flex-col">
                    <span class="ml-2 font-bold">Email</span>
                    <input class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300"
                        type="email" name="email" value="" placeholder="your@email.com" required>
                </div>
                <div class="flex flex-col w-full">
                    <span class="ml-2 font-bold">Message</span>
                    <textarea class="border border-border-custom rounded-md p-3 w-full placeholder:text-gray-300 h-full"
                        placeholder="Write your message here" name="message" required></textarea>
                </div>
            </div>
            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
            <button type="submit"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">SEND
                MESSAGE</button>
        </div>
    </form>
</div>
<?php
include_once(__DIR__."/template/foot.inc.php");
