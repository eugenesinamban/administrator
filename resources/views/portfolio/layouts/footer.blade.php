<div class="footer">
    <div class="row">
        <div class="col">
            @foreach ($about as $line)
                <p class="footer__text">{{ $line[$lang] }}</p>
            @endforeach
        </div>
        <div class="col-3">
            <p class="footer__text">
                <a href="https://github.com/eugenesinamban" target="_blank" rel="noopener">Github</a>
                
            </p>
        </div>
        <div class="col-3">
            <p class="footer__text">
                <a href="https://twitter/codejunkie21" target="_blank" rel="noopener">Twitter</a>
            </p>
        </div>
    </div>
</div>