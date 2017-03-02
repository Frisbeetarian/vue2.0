<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">

    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>
<div id="root" class="container">
    {{--@include ('projects.list')--}}
    <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        <div class="control">
            <label for="name" class="label">Project name:</label>
            <input type="text" id="name" name="name" class="input" v-model="form.name">

            <span class="help is-danger" v-if="form.errors.has('name')">@{{ form.errors.get('name') }}</span>
        </div>

        <div class="control">
            <label for="description" class="label">Project description:</label>
            <input type="text" id="description" name="description" class="input" v-model="form.description">

            <span class="help is-danger" v-if="form.errors.has('description')">@{{ form.errors.get('description') }}</span>
        </div>

        <div class="control">
            <button class="button is-primary" :disabled="form.errors.any()">Create</button>
        </div>
    </form>
</div>

<script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>