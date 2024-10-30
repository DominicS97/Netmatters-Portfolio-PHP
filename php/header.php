<?php
?>
<span id="top"></span>

<header id="header">
    <!-- container for sidebar items -->
    <div id="container">
        <!-- logo -->
        <div>
            <a href="index.html" id="logo">
                <picture>
                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/webp/large/logo.webp" />
                    <source type="image/png" media="(min-width: 1200px)" srcset="img/png/large/logo.png" />
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/webp/medium/logo.webp" />
                    <source type="image/png" media="(min-width: 768px)" srcset="img/png/medium/logo.png" />
                    <source type="image/webp" srcset="img/webp/small/logo.webp" />
                    <img alt="stylish logo" src="img/png/small/logo.png" width="400px" height="400px" />
                </picture>
            </a>
        </div>

        <!-- burger menu (xsmall only) -->
        <div>
            <button onclick="burgerToggle()">
                <a id="icn-burger" aria-label="View Navigation Menu"></a>
            </button>
        </div>

        <!-- content page links -->
        <div id="links">
            <ul>
                <li><a class="link" href="about.html">About Me</a></li>
                <li>
                    <a class="link" href="projects.html">Projects</a>
                </li>
                <li>
                    <a class="link" href="code.html">Code Snippets</a>
                </li>
                <li><a class="link" href="scs.html">SCS Scheme</a></li>
            </ul>
        </div>

        <div id="links2">
            <ul>
                <li><a class="link" href="about.html">About Me</a></li>
                <li>
                    <a class="link" href="projects.html">Projects</a>
                </li>
                <li>
                    <a class="link" href="code.html">Code Snippets</a>
                </li>
                <li><a class="link" href="scs.html">SCS Scheme</a></li>
            </ul>
        </div>

        <!-- subtitle -->
        <div>
            <h2>
                <a class="link" href="index.html#contact">Contact Me</a>
            </h2>
        </div>

        <!-- socials -->
        <div>
            <br />
            <a href="https://github.com/DominicS97" target="_blank" class="icn-github"
                aria-label="View GitHub page"></a>
            <p>a</p>
        </div>
    </div>
</header>