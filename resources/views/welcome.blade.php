<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">

    </div>
    {{-- Navbar --}}
    <nav class="navbarContainer">
        <div class="navbarWrapper">
            <div class="logoContainer">
                <img src="/assets/elephant.png" alt="logo">
                <p>Gajah</p>
            </div>
            <div class="navLinks">
                <a href="">Home</a>
                <a href="">My Gallery</a>
                <a href="">Login</a>
            </div>
        </div>
    </nav>

    {{-- Landing Page --}}
    <div class="landingPage">
        <img src="/assets/background.jpg" alt="">
        <div class="landingPageText">
            <h4>Welcome to</h4>
            <h2>Meseum Gajah</h2>
        </div>
    </div>

    {{-- Gallery Page --}}
    <div class="contentContainer">
        <div class="contentWrapper">
            <div class="top">
                <h1>Art of the month</h1>
            </div>

            <form action="/store-foto" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- pop up untuk add imagenya --}}
                <div class="popUpContainer">
                    <h4>Click here to add Image</h4>
                    <label for="foto">
                        <img id="uploadFile" src="/assets/upload file.png" alt="">
                    </label>
                    <input type="file" name="foto" id="foto">
                    <div class="nameContainer">
                        <label id="nameLabel" for="name">Photo Name</label>
                        <input type="text" name="name" id="inputName">
                    </div>
                    <button class="uploadBtn" type="submit">Save</button>
                </div>
            </form>
            
            <div class="photoGallery">
                @forelse ($foto as $f)
                <div class="galleryContent">
                    <img src="storage/{{ $f->foto }}" alt="{{ $f->foto }}">
                    <p>{{ $f->name }}</p>
                    <form action="/delete-foto/{{ $f->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" id="deleteBtn"><div class="deleteImg"><img src="/assets/delete.png" alt="delete" id="deleteImg"></div></button>
                    </form>
                </div>
                @empty
                    <p>Let's upload a foto...</p>
                @endforelse
            </div>

            {{-- overlay untuk ketika popup box muncul --}}
            <div class="darkOverlay"></div>

            {{-- Button untuk munculin pop upnya --}}
            <button type="submit" id="addImage">Add Image</button>

        </div>  
        {{-- Spotlight image for gallery --}}
        <div class="spotlight1">
            <img src="/assets/spotlight.png" alt="">
        </div>
        <div class="spotlight2">
            <img src="/assets/spotlight.png" alt="">
        </div>
    </div>

    <script src="/index.js"></script>
</body>
</html>