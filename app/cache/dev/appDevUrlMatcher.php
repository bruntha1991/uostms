<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/images/example')) {
            // _assetic_d34838a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd34838a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_d34838a',);
            }

            // _assetic_d34838a_0
            if ($pathinfo === '/images/example_DSC00093_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd34838a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_d34838a_0',);
            }

            // _assetic_00a47c1
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '00a47c1',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_00a47c1',);
            }

            // _assetic_00a47c1_0
            if ($pathinfo === '/images/example_DSC00094_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '00a47c1',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_00a47c1_0',);
            }

            // _assetic_cb6a863
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb6a863',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_cb6a863',);
            }

            // _assetic_cb6a863_0
            if ($pathinfo === '/images/example_DSC00096_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb6a863',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_cb6a863_0',);
            }

            // _assetic_32a6e0e
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '32a6e0e',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_32a6e0e',);
            }

            // _assetic_32a6e0e_0
            if ($pathinfo === '/images/example_DSC00097_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '32a6e0e',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_32a6e0e_0',);
            }

            // _assetic_cebaa05
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cebaa05',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_cebaa05',);
            }

            // _assetic_cebaa05_0
            if ($pathinfo === '/images/example_DSC00098_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cebaa05',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_cebaa05_0',);
            }

            // _assetic_ecc37a4
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecc37a4',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ecc37a4',);
            }

            // _assetic_ecc37a4_0
            if ($pathinfo === '/images/example_DSC00081_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecc37a4',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ecc37a4_0',);
            }

            // _assetic_5c5aeeb
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5c5aeeb',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5c5aeeb',);
            }

            // _assetic_5c5aeeb_0
            if ($pathinfo === '/images/example_DSC00083_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5c5aeeb',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5c5aeeb_0',);
            }

            // _assetic_3c5850b
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3c5850b',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_3c5850b',);
            }

            // _assetic_3c5850b_0
            if ($pathinfo === '/images/example_DSC00085_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3c5850b',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_3c5850b_0',);
            }

            // _assetic_4196a48
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4196a48',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_4196a48',);
            }

            // _assetic_4196a48_0
            if ($pathinfo === '/images/example_DSC00086_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4196a48',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_4196a48_0',);
            }

            // _assetic_21b0e59
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '21b0e59',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_21b0e59',);
            }

            // _assetic_21b0e59_0
            if ($pathinfo === '/images/example_DSC00086_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '21b0e59',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_21b0e59_0',);
            }

            // _assetic_ea0931a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ea0931a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ea0931a',);
            }

            // _assetic_ea0931a_0
            if ($pathinfo === '/images/example_DSC00087_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ea0931a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ea0931a_0',);
            }

            // _assetic_866252c
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '866252c',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_866252c',);
            }

            // _assetic_866252c_0
            if ($pathinfo === '/images/example_DSC00088_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '866252c',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_866252c_0',);
            }

            // _assetic_bba8a77
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bba8a77',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_bba8a77',);
            }

            // _assetic_bba8a77_0
            if ($pathinfo === '/images/example_DSC00089_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bba8a77',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_bba8a77_0',);
            }

            // _assetic_979b00c
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '979b00c',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_979b00c',);
            }

            // _assetic_979b00c_0
            if ($pathinfo === '/images/example_DSC00090_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '979b00c',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_979b00c_0',);
            }

            // _assetic_af6c278
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6c278',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_af6c278',);
            }

            // _assetic_af6c278_0
            if ($pathinfo === '/images/example_DSC00092_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6c278',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_af6c278_0',);
            }

            // _assetic_5a99088
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5a99088',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5a99088',);
            }

            // _assetic_5a99088_0
            if ($pathinfo === '/images/example_DSC00109_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5a99088',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5a99088_0',);
            }

            // _assetic_603698a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '603698a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_603698a',);
            }

            // _assetic_603698a_0
            if ($pathinfo === '/images/example_DSC00111_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '603698a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_603698a_0',);
            }

            // _assetic_5316921
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5316921,  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5316921',);
            }

            // _assetic_5316921_0
            if ($pathinfo === '/images/example_DSC00112_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5316921,  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5316921_0',);
            }

            // _assetic_bd3b794
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd3b794',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_bd3b794',);
            }

            // _assetic_bd3b794_0
            if ($pathinfo === '/images/example_DSC00113_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd3b794',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_bd3b794_0',);
            }

            // _assetic_c7bc212
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c7bc212',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_c7bc212',);
            }

            // _assetic_c7bc212_0
            if ($pathinfo === '/images/example_DSC00114_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c7bc212',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_c7bc212_0',);
            }

            // _assetic_5627966
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5627966,  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5627966',);
            }

            // _assetic_5627966_0
            if ($pathinfo === '/images/example_DSC00115_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5627966,  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5627966_0',);
            }

            // _assetic_387c565
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '387c565',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_387c565',);
            }

            // _assetic_387c565_0
            if ($pathinfo === '/images/example_DSC00100_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '387c565',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_387c565_0',);
            }

            // _assetic_4495fbc
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4495fbc',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_4495fbc',);
            }

            // _assetic_4495fbc_0
            if ($pathinfo === '/images/example_DSC00102_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4495fbc',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_4495fbc_0',);
            }

            // _assetic_d9ef8a4
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd9ef8a4',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_d9ef8a4',);
            }

            // _assetic_d9ef8a4_0
            if ($pathinfo === '/images/example_DSC00103_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd9ef8a4',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_d9ef8a4_0',);
            }

            // _assetic_f7d2ca9
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7d2ca9',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f7d2ca9',);
            }

            // _assetic_f7d2ca9_0
            if ($pathinfo === '/images/example_DSC00104_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7d2ca9',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f7d2ca9_0',);
            }

            // _assetic_a8b9453
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8b9453',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_a8b9453',);
            }

            // _assetic_a8b9453_0
            if ($pathinfo === '/images/example_DSC00057_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8b9453',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_a8b9453_0',);
            }

            // _assetic_801ac0f
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '801ac0f',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_801ac0f',);
            }

            // _assetic_801ac0f_0
            if ($pathinfo === '/images/example_DSC00060_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '801ac0f',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_801ac0f_0',);
            }

            // _assetic_fe0e587
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe0e587',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_fe0e587',);
            }

            // _assetic_fe0e587_0
            if ($pathinfo === '/images/example_DSC00061_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe0e587',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_fe0e587_0',);
            }

            // _assetic_65038aa
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '65038aa',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_65038aa',);
            }

            // _assetic_65038aa_0
            if ($pathinfo === '/images/example_DSC00063_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '65038aa',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_65038aa_0',);
            }

            // _assetic_a85888b
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a85888b',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_a85888b',);
            }

            // _assetic_a85888b_0
            if ($pathinfo === '/images/example_DSC00064_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a85888b',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_a85888b_0',);
            }

            // _assetic_79f0f90
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '79f0f90',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_79f0f90',);
            }

            // _assetic_79f0f90_0
            if ($pathinfo === '/images/example_DSC00105_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '79f0f90',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_79f0f90_0',);
            }

            // _assetic_0d7942b
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0d7942b',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_0d7942b',);
            }

            // _assetic_0d7942b_0
            if ($pathinfo === '/images/example_DSC00106_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0d7942b',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_0d7942b_0',);
            }

            // _assetic_e2c8deb
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2c8deb',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_e2c8deb',);
            }

            // _assetic_e2c8deb_0
            if ($pathinfo === '/images/example_DSC00107_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2c8deb',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_e2c8deb_0',);
            }

            // _assetic_8a7f023
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a7f023',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_8a7f023',);
            }

            // _assetic_8a7f023_0
            if ($pathinfo === '/images/example_DSC00108_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a7f023',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_8a7f023_0',);
            }

            // _assetic_b6e53c9
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6e53c9',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b6e53c9',);
            }

            // _assetic_b6e53c9_0
            if ($pathinfo === '/images/example_home_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6e53c9',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b6e53c9_0',);
            }

            // _assetic_870327f
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '870327f',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_870327f',);
            }

            // _assetic_870327f_0
            if ($pathinfo === '/images/example_DSC00058_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '870327f',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_870327f_0',);
            }

            // _assetic_df4827d
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df4827d',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_df4827d',);
            }

            // _assetic_df4827d_0
            if ($pathinfo === '/images/example_DSC00074_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df4827d',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_df4827d_0',);
            }

            // _assetic_dad4cf0
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dad4cf0',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_dad4cf0',);
            }

            // _assetic_dad4cf0_0
            if ($pathinfo === '/images/example_DSC00076_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dad4cf0',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_dad4cf0_0',);
            }

            // _assetic_fa81e8b
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fa81e8b',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_fa81e8b',);
            }

            // _assetic_fa81e8b_0
            if ($pathinfo === '/images/example_DSC00077_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fa81e8b',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_fa81e8b_0',);
            }

            // _assetic_f7f8055
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7f8055',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f7f8055',);
            }

            // _assetic_f7f8055_0
            if ($pathinfo === '/images/example_slide-02_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7f8055',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f7f8055_0',);
            }

            // _assetic_64ea5fe
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '64ea5fe',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_64ea5fe',);
            }

            // _assetic_64ea5fe_0
            if ($pathinfo === '/images/example_DSC00100_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '64ea5fe',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_64ea5fe_0',);
            }

            // _assetic_6f898a8
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6f898a8',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_6f898a8',);
            }

            // _assetic_6f898a8_0
            if ($pathinfo === '/images/example_DSC00048_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6f898a8',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_6f898a8_0',);
            }

            // _assetic_ab7dced
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab7dced',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ab7dced',);
            }

            // _assetic_ab7dced_0
            if ($pathinfo === '/images/example_DSC00051_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab7dced',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ab7dced_0',);
            }

            // _assetic_08c0d26
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '08c0d26',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_08c0d26',);
            }

            // _assetic_08c0d26_0
            if ($pathinfo === '/images/example_DSC00052_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '08c0d26',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_08c0d26_0',);
            }

            // _assetic_f8f5ee6
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8f5ee6',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f8f5ee6',);
            }

            // _assetic_f8f5ee6_0
            if ($pathinfo === '/images/example_DSC00056_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8f5ee6',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f8f5ee6_0',);
            }

            // _assetic_4d950f8
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d950f8',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_4d950f8',);
            }

            // _assetic_4d950f8_0
            if ($pathinfo === '/images/example_DSC00063_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d950f8',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_4d950f8_0',);
            }

            // _assetic_7051c8f
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7051c8f',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_7051c8f',);
            }

            // _assetic_7051c8f_0
            if ($pathinfo === '/images/example_slide-01_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7051c8f',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_7051c8f_0',);
            }

            // _assetic_b222f6a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b222f6a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b222f6a',);
            }

            // _assetic_b222f6a_0
            if ($pathinfo === '/images/example_slide-03_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b222f6a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b222f6a_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // uosuostms_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uosuostms_homepage')), array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::indexAction',));
        }

        // uosuostms_uos
        if ($pathinfo === '/uos') {
            return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::uosAction',  '_route' => 'uosuostms_uos',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/fs')) {
                // uosuostms_fs
                if ($pathinfo === '/fs') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fsAction',  '_route' => 'uosuostms_fs',);
                }

                // uosuostms_fsr
                if ($pathinfo === '/fsr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fsrAction',  '_route' => 'uosuostms_fsr',);
                }

            }

            if (0 === strpos($pathinfo, '/ff')) {
                // uosuostms_ff
                if ($pathinfo === '/ff') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::ffAction',  '_route' => 'uosuostms_ff',);
                }

                // uosuostms_ffr
                if ($pathinfo === '/ffr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::ffrAction',  '_route' => 'uosuostms_ffr',);
                }

            }

            if (0 === strpos($pathinfo, '/fttl')) {
                // uosuostms_fttl
                if ($pathinfo === '/fttl') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fttlAction',  '_route' => 'uosuostms_fttl',);
                }

                // uosuostms_fttlr
                if ($pathinfo === '/fttlr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fttlrAction',  '_route' => 'uosuostms_fttlr',);
                }

            }

            if (0 === strpos($pathinfo, '/falll')) {
                // uosuostms_falll
                if ($pathinfo === '/falll') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::falllAction',  '_route' => 'uosuostms_falll',);
                }

                // uosuostms_falllr
                if ($pathinfo === '/falllr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::falllrAction',  '_route' => 'uosuostms_falllr',);
                }

            }

        }

        // uosuostms_hall
        if ($pathinfo === '/hall') {
            return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::hallAction',  '_route' => 'uosuostms_hall',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
