# lcl

alias admin-lcl-build="docker-compose build php-fpm lcl"
alias admin-lcl="admin-lcl-build && docker-compose up lcl"
alias admin-lcl-d="admin-lcl-build && docker-compose up -d lcl"
alias admin-lcl-logs="docker-compose logs -f --tail 100 lcl"
alias admin-lcl-restart="docker-compose restart lcl"
alias admin-lcl-db-bash="docker-compose exec db bash"
alias admin-lcl-bash="docker-compose exec lcl bash"

# prd
# alias admin-prd-build="docker-compose build php-fpm prd"
alias admin-prd="admin-prd-build && docker-compose up -d prd"
alias admin-prd-bash="docker-compose exec prd bash"

alias admin-prd-push=" \
    docker tag administrator_prd codejunkie21/administrator_prd:latest && \
    docker push codejunkie21/administrator_prd:latest
"
# deploy
alias admin-prd-deploy="mr-prd-build && mr-prd-push"

function mr-prd-build() {
  git fetch origin master
  ORIGIN_MASTER=$(git show-ref origin/master -s)
  CURRENT=$(git rev-parse HEAD)
  if [[ "$ORIGIN_MASTER" != "$CURRENT" ]]; then
    echo 'origin/master と一致していないのでビルドできません';

    # return error
    return 1
  else
    echo 'git diff をチェックしてビルドします。コミットされてなければビルドできません';
    git diff --exit-code && \
    git diff --staged --exit-code && \
    docker-compose build php-fpm prd
  fi
}