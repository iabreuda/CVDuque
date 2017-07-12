# Configurando o ambiente de desenvolvimento

Uma serie de dependencias devem ser instaladas para facilitar o desenvolvimento do projeto.

## Instalando pacotes

```
sudo apt-get install php7.0
sudo apt-get install php7.0-zip
sudo apt-get install php-mbstring
sudo apt-get install git
sudo apt-get install composer
sudo apt-get install php-codesniffer
sudo apt-get install phpmd
```

## Instalando o Editor de texto

O Editor de texto a ser utilizado sera o sublime3, para instala-lo utilizando o apt-get siga os seguintes passos:
```
wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add -
echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
sudo apt-get update
sudo apt-get install sublime-text

```

Para habilitar o gerenciador de pacotes do sublime
```
ctrl+`
import urllib.request,os,hashlib; h = 'df21e130d211cfc94d9b0905775a7c0f' + '1e3d39e33b79698005270310898eea76'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by)
```
### Pacotes do sublime a serem instalados

- [x] SublimeLinter
- [x] Bracket​Highlighter
- [x] SublimeCodeIntel
- [x] Alignment
- [x] SFTP
- [x] Doc​Blockr
- [x] Composer
- [x] Material Theme
- [x] phpcs
- [x] Laravel 5 Snippets
- [x] Laravel 5 Artisan

**Configurando o Material theme**

Va em ``Preferences > Settings - User`` e adicione as seguintes linhas:

```
"color_scheme": "Packages/Material Theme/schemes/Material-Theme.tmTheme",
"theme": "Material-Theme.sublime-theme",
"always_show_minimap_viewport" : true,
"bold_folder_labels"           : true,
"font_options"                 : [ "gray_antialias", "subpixel_antialias" ],    // On retina Mac & Windows
"indent_guide_options"         : [ "draw_normal", "draw_active" ],   // Highlight active indent
"line_padding_bottom"          : 3,
"line_padding_top"             : 3,
"overlay_scroll_bars"          : "enabled",
"material_theme_small_tab"     : true
```

**Habilitando o VI mode e configuracoes padroes**

Va em ``Preferences > Settings - User`` e remova ``[Vintage]`` dos pacotes ignorados.

Adicione as seguintes linhas:

```
    "default_encoding": "UTF-8",
    "default_line_ending": "unix",
    "tab_size": 4,
    "detect_indentation": false,
    "translate_tabs_to_spaces": true,
    "trim_trailing_white_space_on_save": true
```

## Utilizacao do Git

### Clonando o projeto
```
git clone https://github.com/iabreuda/CVDuque.git
```

### Otimizando logs do git

Acesse o ``~/.gitconfig`` e insira:

```
[alias]
lg1 = log --graph --abbrev-commit --decorate --format=format:'%C(bold blue)%h%C(reset) - %C(bold green)(%ar)%C(reset) %C(white)%s%C(reset) %C(dim white)- %an%C(reset)%C(bold yellow)%d%C(reset)' --all
lg2 = log --graph --abbrev-commit --decorate --format=format:'%C(bold blue)%h%C(reset) - %C(bold cyan)%aD%C(reset) %C(bold green)(%ar)%C(reset)%C(bold yellow)%d%C(reset)%n''          %C(white)%s%C(reset) %C(dim white)- %an%C(reset)' --all
lg = !"git lg1"
```

### Workflow do git

![alt text](https://wac-cdn-a.atlassian.com/dam/jcr:21cf772d-2ba5-4686-8259-fcd6fd2311df/05.svg?cdnVersion=fi)

## Instalando o Laravel

Execute o comando para instalar o laravel e suas dependencias:

```
composer create-project laravel/laravel --prefer-dist
mv laravel/* .
```

### Inicializando o servidor laravel

```
php artisan serve
```