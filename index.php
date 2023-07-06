
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
<meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./style/style.css">
    <title>To do list</title>
</head>

<body>
    <!-- initialazing vue app -->
    <div id="app">
        <!-- list output -->
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="(item , index) in list" :ket="index">{{item.text}}</li> 
                    </ul>
                </div>
            </div>
        </div>
        <!-- list input -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="input-group mt-2">
                        <input type="text" @keyup.enter="pushTodo" v-model="getInput" placeholder="What to do?" class="form-control">
                        <button class="btn btn-success"@click="pushTodo">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script -->
    <script type="text/javascript" src="./js/script.js"></script>
   
</body>

</html>