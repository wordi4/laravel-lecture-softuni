            <footer style="background-color: #f5f5f5; padding: 15px; text-align: center; margin: 25px 0 0 0;">
                The footer goes here {{ date('Y') }} &copy;
            </footer>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {!! Html::script('js/jquery.min.js') !!}

    <!-- Latest compiled and minified JavaScript -->
    {!! Html::script('js/bootstrap.min.js') !!}

    {{ Html::script('js/main.js') }}
</body>
</html>