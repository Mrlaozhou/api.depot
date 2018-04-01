<?php

namespace App\Console\Commands;

use function Composer\Autoload\includeFile;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:api {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create api controller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // TODO 参数获取、参数解析、是否已存在
        // -- 参数获取
        $param          =   $this->argument('name') ?? null;
        // ---- 参数不存在
        is_null($param) && exit($this->warn('Place enter the name you need create.'));
        // -- 参数解析
        $param          =   array_map( 'ucfirst' ,explode( '/', $param ) );
        $filename       =   implode( '/', $param ).'.php';
        $namespace      =   count($param) > 1 && ( $name=array_pop( $param ) )
            ?   implode( '\\', $param )
            :   '';
        // 是否已经存在
        File::exists( $this->getApiPath($filename) ) && exit( $this->info('Has already exists.') );
        // 父级是否存在
        $this->createBase();
        // 文件信息
        $fileinfo       =   $this->getStub( 'api' );
        $fileinfo       =   str_replace( '--NAMESPACE--',$namespace, $fileinfo );
        $fileinfo       =   str_replace( '--NAME--', $name, $fileinfo );

        File::put( $filename, $fileinfo );

        exit( $this->info('Created file successfully!')  );
    }

    protected function createBase ()
    {
        // base 文件地址
        $baseFilename           =   $this->getApiPath('Base.php');
        // 是否已经存在
        if( File::exists ( $baseFilename ) ) return ;
        // 文件信息
        $fileinfo               =   $this->getStub('api_base');
        // 创建文件
        return File::put( $baseFilename, $fileinfo, true );
    }

    protected function getApiPath ($path='')
    {
        return app()->basePath().'/app/Api/'.$path;
    }

    protected function getCurrentPath()
    {
        return  realpath(__DIR__);
    }

    protected function getStub ($name)
    {
        $stubPath           =   $this->getCurrentPath().'/../Stubs/'.$name.'.stub';
        return file_get_contents( $stubPath );
    }
}
