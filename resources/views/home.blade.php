@extends('layouts.app')

@section('title', 'Putri Aimi Batrisyia | Data Analytics')

@section('content')

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container navbar-container">

            <a href="#" class="logo">
                Aimi<span>.</span>
            </a>

            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#contact">Contact</a>
            </div>

        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero">

        <div class="container hero-container">

            <div class="hero-content">

                <p class="hero-greeting">
                    Hello, I'm
                </p>

                <h1>
                    Putri Aimi<br>
                    <span>Batrisyia</span>
                </h1>

                <h2>
                    Information Technology Student
                    <br>
                    <span>Data Analytics Major</span>
                </h2>

                <p class="hero-description">
                    Passionate about transforming data into meaningful
                    insights and practical solutions.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        View My Projects
                    </a>

                    <a href="#contact" class="btn btn-secondary">
                        Contact Me
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- About Section -->
<section id="about" class="section about-section">

    <div class="container">

        <div class="section-heading">
            <p class="section-label">ABOUT ME</p>
            <h2>Get to Know Me</h2>
        </div>

        <div class="about-content">

            <div class="about-text">

                <p>
                    I am an Information Technology student at the
                    International Islamic University Malaysia, majoring
                    in Data Analytics.
                </p>

                <p>
                    I am interested in Data Analytics, Data Management,
                    and IT Business, with a passion for transforming
                    data into meaningful insights and practical solutions.
                </p>

                <p>
                    I am currently seeking a Data Analytics internship
                    placement from September to April, where I can apply
                    my technical, analytical, and project management
                    skills while gaining valuable industry experience.
                </p>

            </div>

            <div class="about-highlight">

                <div class="highlight-card">
                    <span class="highlight-number">3.62</span>
                    <span class="highlight-label">Current CGPA</span>
                </div>

                <div class="highlight-card">
                    <span class="highlight-number">Dean's List</span>
                    <span class="highlight-label">Every Semester</span>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- Education Section -->
<section id="education" class="section education-section">

    <div class="container">

        <div class="section-heading">
            <p class="section-label">EDUCATION</p>
            <h2>Academic Background</h2>
        </div>

        <div class="education-card">

            <div class="education-year">
                2024 — Present
            </div>

            <div class="education-details">

                <h3>
                    Bachelor of Information Technology with Honours
                </h3>

                <h4>
                    International Islamic University Malaysia
                </h4>

                <p class="education-major">
                    Major in Data Analytics
                </p>

                <div class="education-achievement">
                    <span>CGPA: 3.62 / 4.00</span>
                    <span>Dean's List — Every Semester</span>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- Skills Section -->
<section id="skills" class="section skills-section">

    <div class="container">

        <div class="section-heading">
            <p class="section-label">TECHNICAL SKILLS</p>
            <h2>What I Work With</h2>

            <p class="section-intro">
                A collection of technologies and tools I have explored
                through academic projects, coursework, and practical experience.
            </p>
        </div>


        <div class="skills-grid">

            <!-- Data & Analytics -->
            <div class="skill-card">

                <div class="skill-icon">
                    📊
                </div>

                <h3>Data & Analytics</h3>

                <div class="skill-tags">
                    <span>Python</span>
                    <span>Pandas</span>
                    <span>NumPy</span>
                    <span>Tableau</span>
                    <span>Machine Learning</span>
                </div>

            </div>


            <!-- Database -->
            <div class="skill-card">

                <div class="skill-icon">
                    🗄️
                </div>

                <h3>Database & Data Management</h3>

                <div class="skill-tags">
                    <span>SQL</span>
                    <span>MySQL</span>
                    <span>Oracle</span>
                    <span>PL/SQL</span>
                    <span>Database Design</span>
                </div>

            </div>


            <!-- Programming -->
            <div class="skill-card">

                <div class="skill-icon">
                    💻
                </div>

                <h3>Programming</h3>

                <div class="skill-tags">
                    <span>Python</span>
                    <span>Java</span>
                    <span>PHP</span>
                    <span>JavaScript</span>
                </div>

            </div>


            <!-- Web Development -->
            <div class="skill-card">

                <div class="skill-icon">
                    🌐
                </div>

                <h3>Web Development</h3>

                <div class="skill-tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Laravel</span>
                    <span>PHP</span>
                </div>

            </div>


            <!-- Tools -->
            <div class="skill-card">

                <div class="skill-icon">
                    🛠️
                </div>

                <h3>Tools & Technologies</h3>

                <div class="skill-tags">
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>VS Code</span>
                    <span>XAMPP</span>
                    <span>Figma</span>
                    <span>Canva</span>
                </div>

            </div>


            <!-- Professional -->
            <div class="skill-card">

                <div class="skill-icon">
                    📋
                </div>

                <h3>Professional Skills</h3>

                <div class="skill-tags">
                    <span>Project Management</span>
                    <span>Team Leadership</span>
                    <span>Communication</span>
                    <span>Problem Solving</span>
                    <span>Customer Service</span>
                </div>

            </div>

        </div>

    </div>

</section>
    
@endsection