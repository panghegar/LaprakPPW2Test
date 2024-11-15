<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .book {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .book-title {
            font-weight: bold;
        }

        .book-author {
            color: #555;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <h1>Book List</h1>
    <div id="book-list"></div>

    <!-- Include external JavaScript file -->
    <script>
        // API endpoint
const apiUrl = 'http://127.0.0.1:8000/api/books';

// Fetch the list of books from the API
fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        // Periksa apakah respons sukses
        if (data.data.success) {
            const bookList = document.getElementById('book-list');
            
            // Iterasi melalui data buku dalam `data.data.resource.data`
            data.data.resource.data.forEach(book => {
                // Create book container
                const bookContainer = document.createElement('div');
                bookContainer.classList.add('book');

                // Add book title
                const bookTitle = document.createElement('div');
                bookTitle.classList.add('book-title');
                bookTitle.textContent = book.judul;
                bookContainer.appendChild(bookTitle);

                // Add book author
                const bookAuthor = document.createElement('div');
                bookAuthor.classList.add('book-author');
                bookAuthor.textContent = `by ${book.penulis}`;
                bookContainer.appendChild(bookAuthor);

                // Append to the list
                bookList.appendChild(bookContainer);
            });
        } else {
            console.error('Failed to fetch data:', data.data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching the book list:', error);
    });

    </script>
</body>

</html>
