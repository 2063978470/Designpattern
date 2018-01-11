<?php
/**抽象结构角色          公司
 * Class Company
 */
abstract class Company
{
    protected $name;

    function __construct($name)
    {
        $this->name=$name;
    }

    /**增加
     * @param Company $company    子公司，部门
     * @return mixed
     */
    abstract function Add(Company $company);

    /**移除
     * @param Company $company   子公司，部门
     * @return mixed
     */
    abstract function Remove(Company $company);

    /**显示公司及部门结构
     * @param $depth
     * @return mixed
     */
    abstract function Display($depth);

}

/**枝节点               子公司
 * Class Beijing
 */
class SubCompany extends Company
{

    private $sub_companys=array();

    function __construct($name)
    {
        parent::__construct($name);
    }

    function Add(Company $company)
    {
        $this->sub_companys[]=$company;
    }

    function Remove(Company $company)
    {
        $key=array_search($company,$this->sub_companys);
        if($key!==false)
        {
            unset($this->sub_companys[$key]);
        }
    }

    function Display($depth)
    {
        $pre="";
        for($i=0;$i<$depth;$i++)
        {
            $pre.="-";
        }
        $pre.=$this->name."<br/>";
        echo $pre;

        foreach($this->sub_companys as $v)
        {
            $v->Display($depth+2);
        }
    }

}

/**叶子节点                    财务部
 * Class DeptCompany
 */
class MoneyDept extends Company
{

    function __construct($name)
    {
        parent::__construct($name);
    }

    /**增加
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Add(Company $company)
    {
        echo "叶子节点，不能继续添加节点。。。。。。。。。。<br/>";
    }

    /**移除
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Remove(Company $company)
    {
        echo "叶子节点，不能删除节点。。。。。。。。。。<br/>";
    }

    /**显示公司及部门结构
     * @param $depth
     * @return mixed
     */
    function Display($depth)
    {
        $pre="";
        for($i=0;$i<$depth;$i++)
        {
            $pre.="-";
        }
        $pre.=$this->name."<br/>";
        echo $pre;
    }

}

/**叶子节点                    技术部门
 * Class DeptCompany
 */
class TechnologyDept extends Company
{

    function __construct($name)
    {
        parent::__construct($name);
    }

    /**增加
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Add(Company $company)
    {
        echo "叶子节点，不能继续添加节点。。。。。。。。。。<br/>";
    }

    /**移除
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Remove(Company $company)
    {
        echo "叶子节点，不能删除节点。。。。。。。。。。<br/>";
    }

    /**显示公司及部门结构
     * @param $depth
     * @return mixed
     */
    function Display($depth)
    {
        $pre="";
        for($i=0;$i<$depth;$i++)
        {
            $pre.="-";
        }
        $pre.=$this->name."<br/>";
        echo $pre;
    }

}