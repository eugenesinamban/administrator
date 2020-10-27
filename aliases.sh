# lcl

alias lcl-build="docker-compose build php-fpm lcl"
alias lcl="lcl-build && docker-compose up lcl"
alias lcl-d="lcl-build && docker-compose up -d lcl"
alias lcl-logs="docker-compose logs -f --tail 100 lcl"
alias lcl-restart="docker-compose restart lcl"
alias lcl-bash="docker-compose exec lcl bash"
