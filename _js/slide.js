// Imagens
var myPix = new Array(5)
myPix[0] = "um";
myPix[1] = "dois";
myPix[2] = "tres";
myPix[3] = "quatro";
myPix[4] = "cinco";
// Tarjas
var myText = new Array(5)
myText[0] = "Frente da escola Estadual Maria Ivone";
myText[1] = "Alunos brincando carnaval ao som de marchinhas";
myText[2] = "Funcionários da Escola Maria Ivone";
myText[3] = "Alunos reunidos para foto de fim de ano";
myText[4] = "Participação dos pais nas reuniões da escola";
// Variáveis// Variáveis
var format = ".jpg"; // formato das imagens
var timer = "4000"; // tempo, em milésimos de segundos
var i = 1; // não mexer.
var intervalo; // criada variável global da animação

function start() {
	intervalo = window.setInterval("change()",timer); // Inicia a animação
	document.getElementById(0).className = "imgatual";
}

// Função quando clica na imagem pequena exibe ela grande.
function abrir() {
	var main = document.getElementById("exibicao");
	var iten = main.getElementsByTagName("img");
	if (iten)�5u�~h9�R?[n��x��$�{L?�v���a�������Õ����TA�Q�u��ĜJ��|�l �А���P$�%�'�������'g���8~3�$C�Ek���jX���q�m�܌�"Y��K9<i�#������7�뇡|0q�tG30ܖ�G�<�׏E�)!�רA�E�! �l��-]��D	���~rE�N������0����C�hcO�`o�^���/���;-���؄��pw��ˆ~hD8;,���.�_g�a����y=�^Ӣ��4���1V�~����+��~OEktɧ�l�0������޹�ڒ]w}=����RwLٲ�H�NKyXF�1`P��ER$�0�[�\�/H,	YXXqN���l/lv|w��@p��!��XG��6���2n�jVլU���t�^5k�1�U�����-�+X?�=i��:�~�r��*���'�s�a�p�"�a��Ȣ�q��� ��0�~�����X����	�����Z쪋�QJ�cl��i:eCo��`���C-���s��-�b�Y�˳f�0a8?S��y���H�پ����|�؉O^�������aF��/�j� ��$w8��Lڎfmo�͆I�\�
���îqT�g���Ha�����H&��X
H��$�_f�rȦ>&���F�ٿ,]�_�29�C톀�/ @���!��<V?d�+�!y[%�� Gf[�t�ꗨ�}I>4�t����������˲���ˎ$ZN�X�
\V�0e8�#f�0��;?<z<�셃�&�<1v(�ҭ����03�V\�m C���?&W����<�>Zz���X�&���m�>>�I1u�������ezg��s[Z6�`���B~��VE�Ks�j���4��#WO�,^WbZ���ͦ�H�ИB����8�z��N�p���wS����t�P�Cm~� @��a��n^�y�T��X�ْ�}|�B��Ct��M��3�G+"�RH�YtG:HUlR�[
���
S�:b�\�%�)�3�I���
ρ`��,�^�$n<��M��Ѓ�H,o�A�h�!�@�~g�?/+~jV��?oO�*s���ž��ڛ���ϒ^��R=�\��7��Ap{�������B4��#���q�1R�n���L�q˵QKc$���cdI��7��N[K�e7�;�~Ro ���<��t�p�'xw��� 7�m�*D����x�\��rKT# �Ͱ�~���O�!�P7�P�ԃ�@&��,��t[�|�!X�[M�ܯx����Nl�  Hav�0z���f�"�~���M=�d�-�,9,o +s�I;����   �5�]?L{2a	@?���~�0�,)��pS@?�9��]�E{Ew���������O<Tg�  @A̯>&>�pu�fd[S�M6�>"�-�      �7�  ��!      `o@?   �@?      ��   ��      ���   ��  ������d�ϧ�/  �T�   v���N�`Iv�rw���S�{���  �@?   �@?\��
���:��Xۚ9��띋��\"FU�T%��Y�Im�]���ϗ�����l�Ȕ��ɧ�ނ��=�ҫ������c����!-P|  3�5���|<����¸;�fX��_����cj�7�rh����-�f��û�/I4z����M/�e����`���&e�H�����|�S	6,��e�i���'U�So|z��P�f-�5���%Ĥ|���%G�F �l@?��J�Y�U���;S�&�� o�e��A=\-�  �3"�hl}��p5R�ö���&AcD%�TJ�a��-�M#%\>9���)�pq�>�N� 'ڰ��E�C�   (������(��k�:��Z>�Z?ܝ� ��,�