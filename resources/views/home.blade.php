<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="section">
        <h2>About Me</h2>
        <hr>
        <p>Hi! This is my personal homepage on the <strong>W</strong>orld <strong>W</strong>ide <strong>W</strong>eb.</p>
        <br>
        <p>QuickFacts&trade;:</p>
        <ul>
            <li>{{ $age }} y/o, he/him, British</li>
            <li>Theatre Technician, &quot;Web Developer&quot; and NixOS User</li>
            <li>Loves ETC desks, prefers Generics to LEDs for some reason</li>
            <li>Has a crippling Soundcraft addiction</li>
            <li>Spends way too much time on his computer</li>
            <li>Favorite games: <a href="https://steamcommunity.com/id/floppydisk05/recommended/420530/">OneShot</a>, Minecraft, Stardew Valley, N++ and Starbound</li>
            <li><a href="http://wxqa.com/">CWOP</a> member</li>
        </ul>
        <br>
        <p>Interests:</p>
        <ul>
            <li><strong>Tech Theatre</strong> - Lighting, Stage Management, etc. (<a href="https://www.controlbooth.com/members/floppydisk.28673/">ControlBooth</a>)</li>
            <li><strong>Programming</strong> - HTML, CSS, JavaScript, C#, Java, PHP, Ruby, Python (<a href="https://github.com/floppydisk05">GitHub</a>)</li>
            <li><strong>Photography</strong> - <a href="https://www.flickr.com/photos/floppydisk/">Flickr</a></li>
            <li><strong>Gaming</strong> - <a href="https://steamcommunity.com/id/floppydisk05/">Steam Profile</a></li>
        </ul>
    </div>
    <div class="section">
        <h2>Random Quote</h2>
        <hr>
        <p class="quote">
            <script type="text/javascript" src="{{ asset("/js/randomQuote.js") }}"></script>
            <noscript>Oops! You need JavaScript enabled to view this content.</noscript>
        </p>
    </div>
    <div class="section">
        <h2>Contact</h2>
        <hr>
        <p>
            <strong>E-mail:</strong> <a href="mailto:contact@diskfloppy.me">contact@diskfloppy.me</a><br>
            <strong>Mastodon:</strong> <a rel="me" href="https://c.im/@floppydisk">@floppydisk@c.im</a><br>
            <strong>Matrix:</strong> <a href="https://matrix.to/#/@floppydisk:arcticfoxes.net">@floppydisk:arcticfoxes.net</a>
        </p>
    </div>
</x-layout>
