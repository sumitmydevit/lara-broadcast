require('./bootstrap');

Echo.channel('postchannel')
.listen('PostCreated', (e) => {
    //console.log(e);
    const item = '<li class="list-group-item">'+e.post.title+'</li>';
    $('.list-group').append(item);
});
